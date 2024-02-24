<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker;

use Yiisoft\VarDumper\VarDumper;

final class Mocker
{
    public function __construct(private string $path = __DIR__ . '/../data/mocks.php')
    {
    }

    public function load(array $mocks): void
    {
        $data = "<?php\n\n";
        $data .= $this->generate($mocks);
        $configPath = $this->getConfigPath();
        $directoryPath = dirname($configPath);

        if (!is_dir($directoryPath)) {
            mkdir($directoryPath, 0775, true);
        }
        file_put_contents($configPath, $data);

        require_once $configPath;
    }

    public function generate(array $mocks): string
    {
        $mocks = $this->normalizeMocks($mocks);
        $mockerConfig = [];
        foreach ($mocks as $namespace => $functions) {
            foreach ($functions as $functionName => $imocks) {
                foreach ($imocks as $imock) {
                    if ($imock['skip']) {
                        continue;
                    }
                    $argumentsString = VarDumper::create($imock['arguments'])->export(false);
                    $resultString = VarDumper::create($imock['result'])->export(false);
                    $defaultString = $imock['default'] ? 'true' : 'false';
                    $mockerConfig[] = <<<PHP
                        MockerState::addCondition(
                            "$namespace",
                            "$functionName",
                            $argumentsString,
                            $resultString,
                            $defaultString,
                        );
                    PHP;
                }
            }
        }
        $outputs = [];
        $mockerConfigClassName = MockerState::class;
        foreach ($mocks as $namespace => $functions) {
            $innerOutputsString = $this->generateFunction($functions);

            $outputs[] = <<<PHP
            namespace {$namespace} {
                use {$mockerConfigClassName};

            $innerOutputsString
            }
            PHP;
        }


        $pre = '';
        if ($mockerConfig !== []) {
            $runtimeMocks = implode("\n", $mockerConfig);
            $pre = <<<PHP
            namespace {
                use {$mockerConfigClassName};

            {$runtimeMocks}
            }
            PHP;
        }


        return $pre . "\n\n\n" . implode("\n", $outputs);
    }

    private function normalizeMocks(array $mocks): array
    {
        $result = [];
        usort($mocks, fn ($a, $b) => strlen($a['namespace']) <=> strlen($b['namespace']));
        foreach ($mocks as $mock) {
            $result[$mock['namespace']][$mock['name']][] = [
                'namespace' => $mock['namespace'],
                'name' => $mock['name'],
                'result' => $mock['result'] ?? null,
                'arguments' => $mock['arguments'] ?? [],
                'skip' => !array_key_exists('result', $mock),
                'default' => $mock['default'] ?? false,
                'function' => $mock['function'] ?? false,
            ];
        }
        return $result;
    }

    private function generateFunction(mixed $groupedMocks): string
    {
        $stubs = require __DIR__ . '/stubs.php';
        $innerOutputs = [];
        foreach ($groupedMocks as $functionName => $_) {
            $signatureArguments = $stubs[$functionName]['signatureArguments'] ?? '...$arguments';
            if (isset($stubs[$functionName]['arguments'])) {
                $arrayArguments = sprintf('[%s]', $stubs[$functionName]['arguments']);
                $unpackedArguments = $stubs[$functionName]['arguments'];
            } else {
                $arrayArguments = '$arguments';
                $unpackedArguments = '...$arguments';
            }

            $function = "fn($signatureArguments) => \\$functionName($unpackedArguments)";
            if ($_[0]['function'] !== false) {
                $function = is_string($_[0]['function'])
                    ? $_[0]['function']
                    : VarDumper::create($_[0]['function'])->export(false);
            }

            $string = <<<PHP
                function $functionName($signatureArguments)
                {
                    \$position = MockerState::saveTrace(__NAMESPACE__, "$functionName", $unpackedArguments);
                    if (MockerState::checkCondition(__NAMESPACE__, "$functionName", $arrayArguments)) {
                        \$result = MockerState::getResult(__NAMESPACE__, "$functionName", $unpackedArguments);
                    } else {
                        \$result = MockerState::getDefaultResult(__NAMESPACE__, "$functionName", $function, $unpackedArguments);
                    }
                    
                    return MockerState::saveTraceResult(__NAMESPACE__, "$functionName", \$position, \$result);
                }
            PHP;
            $innerOutputs[] = $string;
        }

        return implode("\n\n", $innerOutputs);
    }

    public function getConfigPath(): string
    {
        return $this->path;
    }
}

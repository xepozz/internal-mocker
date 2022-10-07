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
        $mockerConfig = ['namespace ' . __NAMESPACE__ . ';'];
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
        foreach ($mocks as $namespace => $functions) {
            $innerOutputsString = $this->generateFunction($functions);

            $mockerConfigClassName = MockerState::class;

            $outputs[] = <<<PHP
namespace {$namespace};

use $mockerConfigClassName;

$innerOutputsString
PHP;
        }


        return implode("\n", $mockerConfig) . "\n\n\n" . implode("\n", $outputs);
    }

    private function normalizeMocks(array $mocks): array
    {
        $result = [];
        foreach ($mocks as $mock) {
            $result[$mock['namespace']][$mock['name']][] = [
                'namespace' => $mock['namespace'],
                'name' => $mock['name'],
                'result' => $mock['result'] ?? null,
                'arguments' => $mock['arguments'] ?? [],
                'skip' => !array_key_exists('result', $mock),
                'default' => $mock['default'] ?? false,
            ];
        }
        return $result;
    }

    private function generateFunction(mixed $groupedMocks): string
    {
        $innerOutputs = [];
        foreach ($groupedMocks as $functionName => $_) {
            $string = <<<PHP
            function $functionName(...\$arguments)
            {
                if (MockerState::checkCondition(__NAMESPACE__, "$functionName", \$arguments)) {
                    return MockerState::getResult(__NAMESPACE__, "$functionName", \$arguments);
                }
                return MockerState::getDefaultResult(__NAMESPACE__, "$functionName", fn() => \\$functionName(...\$arguments));
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
<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker;

use Yiisoft\VarDumper\VarDumper;

final class Mocker
{
    private string $path;

    public function __construct(string $path = __DIR__ . '/../data/mocks.php')
    {
        $this->path = $path;
    }

    public function load(array $mocks): void
    {
        $data = "<?php\n\n";
        $data .= $this->generate($mocks);

        file_put_contents($this->getConfigPath(), $data);

        require $this->getConfigPath();
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
                    $mockerConfig[] = <<<PHP
MockerState::addCondition(
    "$namespace", 
    "$functionName",
    {$argumentsString},
    {$resultString}
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
            ];
        }
        return $result;
    }

    private function generateFunction(mixed $grouppedMocks): string
    {
        $innerOutputs = [];
        foreach ($grouppedMocks as $functionName => $_) {
            $string = <<<PHP
            function {$functionName}(...\$arguments)
            {
                if (MockerState::checkCondition(__NAMESPACE__, "$functionName", \$arguments)) {
                    return MockerState::getResult(__NAMESPACE__, "$functionName", \$arguments);
                }
                return \\{$functionName}(...\$arguments);
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
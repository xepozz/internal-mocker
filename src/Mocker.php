<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock;

use Yiisoft\VarDumper\VarDumper;

class Mocker
{
    private string $path;

    public function __construct(string $path = __DIR__ . '/../data/mocks.php')
    {
        $this->path = $path;
    }

    public function load(array $mocks)
    {
        $data = "<?php\n\n";
        $data .= $this->generate($mocks);

        file_put_contents($this->getConfigPath(), $data);

        require $this->getConfigPath();
    }

    public function generate(array $mocks)
    {
        $mocks = $this->normalizeMocks($mocks);
        $mockerConfig = ["namespace Xepozz\InternalFunctionMock;"];
        foreach ($mocks as $namespace => $functions) {
            foreach ($functions as $functionName => $imocks) {
                foreach ($imocks as $imock) {
                    $argumentsString = VarDumper::create($imock['arguments'])->export(false);
                    $resultString = VarDumper::create($imock['result'])->export(false);
                    $mockerConfig[] = <<<PHP
MockerConfig::addCondition(
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

            $outputs[] = <<<PHP
namespace {$namespace};

use Xepozz\InternalFunctionMock\MockerConfig;

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
                'result' => $mock['result'],
                'arguments' => $mock['arguments'],
            ];
        }
        return $result;
    }

    private function generateFunction(mixed $grouppedMocks): string
    {
        $innerOutputs = [];
        foreach ($grouppedMocks as $functionName => $mocks) {
            $string = <<<PHP
            function {$functionName}(...\$arguments)
            {
                if (MockerConfig::checkCondition(__NAMESPACE__, "$functionName", \$arguments)) {
                    return MockerConfig::getResult(__NAMESPACE__, "$functionName", \$arguments);
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
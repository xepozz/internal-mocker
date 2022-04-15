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
        $outputs = [];
        foreach ($mocks as $namespace => $functions) {
            $innerOutputsString = $this->generateFunction($functions);

            $outputs[] = <<<PHP
namespace {$namespace};
{
$innerOutputsString
}
PHP;
        }
        return implode("\n", $outputs);
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
            $conditions = [];
            foreach ($mocks as $mock) {
                $conditions[] = $this->generateConditions($mock);
            }
            $conditionsString = implode("\n", $conditions);

            $string = <<<PHP
            function {$functionName}(...\$arguments)
            {
            $conditionsString
                return \\{$functionName}(...\$arguments);
            }
            PHP;
            $innerOutputs [] = $this->padString($string, 4);
        }

        return implode("\n", $innerOutputs);
    }

    private function generateConditions(array $mock): string
    {
        $flatArguments = VarDumper::create(array_values($mock['arguments']))->export(false);
        $namedArguments = VarDumper::create($mock['arguments'])->export(false);
        $result = VarDumper::create($mock['result'])->export();

        $string = <<<PHP
if (\$arguments === {$namedArguments} || \$arguments === {$flatArguments}) {
    return {$result};
}
PHP;
        return $this->padString($string, 4);
    }

    private function padString(string $string, int $spaces): string
    {
        $result = [];
        $rows = explode("\n", $string);

        foreach ($rows as $row) {
            $result[] = str_repeat(' ', $spaces) . $row;
        }
        return implode("\n", $result);
    }

    public function getConfigPath(): string
    {
        return $this->path;
    }
}
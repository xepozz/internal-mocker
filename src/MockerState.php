<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMocker;

final class MockerState
{
    private static array $state = [];

    public static function addCondition(string $namespace, string $functionName, array $arguments, $result)
    {
        if (self::checkCondition($namespace, $functionName, $arguments)) {
            self::replaceResult($namespace, $functionName, $arguments, $result);
            return;
        }

        self::$state[$namespace][$functionName][] = [
            'namespace' => $namespace,
            'name' => $functionName,
            'result' => $result,
            'arguments' => $arguments,
        ];
    }

    public static function checkCondition(string $namespace, string $functionName, array $expectedArguments): bool
    {
        $mocks = self::$state[$namespace][$functionName] ?? [];

        foreach ($mocks as $mock) {
            if (self::compareArguments($mock['arguments'], $expectedArguments)) {
                return true;
            }
        }
        return false;
    }

    private static function compareArguments($arguments, array $expectedArguments): bool
    {
        return $arguments === $expectedArguments || array_values($arguments) === $expectedArguments;
    }

    private static function replaceResult(string $namespace, string $functionName, array $arguments, $result): void
    {
        $mocks = &self::$state[$namespace][$functionName];

        foreach ($mocks as &$mock) {
            if ($mock['arguments'] === $arguments) {
                $mock['result'] = $result;
            }
        }
    }

    public static function getResult(string $namespace, string $functionName, array $expectedArguments)
    {
        $mocks = self::$state[$namespace][$functionName] ?? [];

        foreach ($mocks as $mock) {
            if (self::compareArguments($mock['arguments'], $expectedArguments)) {
                return $mock['result'];
            }
        }
        return false;
    }


}
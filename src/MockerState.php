<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker;

final class MockerState
{
    private static array $savedState = [];
    private static array $state = [];
    private static array $defaults = [];

    public static function addCondition(
        string $namespace,
        string $functionName,
        array $arguments,
        mixed $result,
        bool $default = false
    ): void {
        if ($default) {
            self::$defaults[$namespace][$functionName] = $result;
            return;
        }

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

    public static function checkCondition(
        string $namespace,
        string $functionName,
        array $expectedArguments,
    ): bool {
        $mocks = self::$state[$namespace][$functionName] ?? [];

        foreach ($mocks as $mock) {
            if (self::compareArguments($mock, $expectedArguments)) {
                return true;
            }
        }
        return false;
    }

    private static function compareArguments(array $arguments, array $expectedArguments): bool
    {
        return $arguments['arguments'] === $expectedArguments
            || array_values($arguments['arguments']) === $expectedArguments;
    }

    private static function replaceResult(
        string $namespace,
        string $functionName,
        array $arguments,
        mixed $result,
    ): void {
        $mocks = &self::$state[$namespace][$functionName];

        foreach ($mocks as &$mock) {
            if ($mock['arguments'] === $arguments) {
                $mock['result'] = $result;
            }
        }
    }

    public static function getResult(
        string $namespace,
        string $functionName,
        array $expectedArguments,
    ): mixed {
        $mocks = self::$state[$namespace][$functionName] ?? [];

        foreach ($mocks as $mock) {
            if (self::compareArguments($mock, $expectedArguments)) {
                return $mock['result'];
            }
        }
        return false;
    }

    public static function getDefaultResult(
        string $namespace,
        string $functionName,
        callable $fallback,
    ): mixed {
        if (isset(self::$defaults[$namespace][$functionName])) {
            return self::$defaults[$namespace][$functionName];
        }

        return $fallback();
    }

    public static function saveState(): void
    {
        self::$savedState = self::$state;
    }

    public static function resetState(): void
    {
        self::$state = self::$savedState;
    }
}
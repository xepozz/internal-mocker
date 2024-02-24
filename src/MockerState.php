<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker;

final class MockerState
{
    private static mixed $traces = [];
    private static array $savedState = [];
    private static array $state = [];
    private static array $defaults = [];

    public static function addCondition(
        string $namespace,
        string $functionName,
        array|string $arguments,
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
        array|string $expectedArguments,
    ): bool {
        $mocks = self::$state[$namespace][$functionName] ?? [];

        foreach ($mocks as $mock) {
            if (self::compareArguments($mock, $expectedArguments)) {
                return true;
            }
        }
        return false;
    }

    private static function compareArguments(array $arguments, array|string $expectedArguments): bool
    {
        return $arguments['arguments'] === $expectedArguments
            || (is_array($arguments['arguments']) && array_values($arguments['arguments']) === $expectedArguments);
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
        &...$expectedArguments,
    ): mixed {
        $mocks = self::$state[$namespace][$functionName] ?? [];

        foreach ($mocks as $mock) {
            if (self::compareArguments($mock, $expectedArguments)) {
                return is_callable($mock['result']) ? $mock['result'](...$expectedArguments) : $mock['result'];
            }
        }
        return false;
    }

    public static function getDefaultResult(
        string $namespace,
        string $functionName,
        callable $fallback,
        &...$arguments,
    ): mixed {
        if (isset(self::$defaults[$namespace][$functionName])) {
            return self::$defaults[$namespace][$functionName];
        }

        return $fallback(...$arguments);
    }

    public static function saveState(): void
    {
        self::$savedState = self::$state;
    }

    public static function resetState(): void
    {
        self::$state = self::$savedState;
        self::$traces = [];
    }

    public static function saveTrace(
        string $namespace,
        string $functionName,
        &...$arguments
    ): int {
        $position = count(self::$traces[$namespace][$functionName] ?? []);
        self::$traces[$namespace][$functionName][$position] = [
            'arguments' => &$arguments,
            'trace' => debug_backtrace(),
        ];

        return $position;
    }

    public static function saveTraceResult(
        string $namespace,
        string $functionName,
        int $position,
        mixed $result
    ): mixed {
        self::$traces[$namespace][$functionName][$position]['result'] = $result;

        return $result;
    }

    public static function getTraces(
        string $namespace,
        string $functionName
    ): array {
        return self::$traces[$namespace][$functionName] ?? [];
    }
}

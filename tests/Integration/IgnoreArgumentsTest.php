<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

final class IgnoreArgumentsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    #[DataProvider('dataProvider')]
    public function testSuccessByCase(string $class): void
    {
        MockerState::addCondition(
            __NAMESPACE__,
            'class_exists',
            [],
            true,
        );

        $this->assertTrue(class_exists($class));
    }

    /**
     * @dataProvider dataProvider
     */
    #[DataProvider('dataProvider')]
    public function testSuccessByDefault(string $class): void
    {
        MockerState::addCondition(
            __NAMESPACE__,
            'class_exists',
            [],
            true,
            true
        );

        $this->assertTrue(class_exists($class));
    }

    public static function dataProvider(): iterable
    {
        return [
            ['A'],
            ['B'],
            ['[{}]'],
        ];
    }
}
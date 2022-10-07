<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

class IgnoreArgumentsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
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

    public function dataProvider(): array
    {
        return [
            ['A'],
            ['B'],
            ['[{}]'],
        ];
    }
}
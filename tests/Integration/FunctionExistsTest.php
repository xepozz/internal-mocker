<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use Xepozz\InternalMocker\MockerState;
use Xepozz\InternalMocker\Stub;

class FunctionExistsTest extends TestCase
{
    public function testSuccess()
    {
        MockerState::addCondition(
            'Xepozz\\InternalMocker',
            'function_exists',
            ['function_exists'],
            false
        );

        $this->expectException(RuntimeException::class);
        new Stub();
    }

    public function testFail()
    {
        MockerState::addCondition(
            'Xepozz\\InternalMocker',
            'function_exists',
            ['function_exists'],
            true
        );

        new Stub();
        $this->assertTrue(true);
    }
}
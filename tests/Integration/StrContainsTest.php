<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

final class StrContainsTest extends TestCase
{
    public function testRun(): void
    {
        $obj = new StrContains();

        $this->assertFalse($obj->run('string', 'str'));
    }

    public function testRun2(): void
    {
        $obj = new StrContains();

        $this->assertFalse($obj->run('string2', 'str'));
    }

    public function testRun3(): void
    {
        $obj = new StrContains();

        $this->assertTrue($obj->run('string3', 'str'));
    }

    public function testRun4(): void
    {
        $obj = new StrContains();

        MockerState::addCondition(
            __NAMESPACE__,
            'str_contains',
            ['string4', 'str'],
            false
        );

        $this->assertFalse($obj->run('string4', 'str'));
    }
}
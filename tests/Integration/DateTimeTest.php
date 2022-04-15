<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

final class DateTimeTest extends TestCase
{
    public function testRun()
    {
        $obj = new DateTime();

        $this->assertEquals(555, $obj->run());
    }

    public function testRun2()
    {
        $obj = new DateTime();

        MockerState::addCondition(
            'Xepozz\InternalMocker\Tests\Integration',
            'time',
            [],
            100
        );

        $this->assertEquals(100, $obj->run());
    }

    public function testRun3()
    {
        $obj = new DateTime();

        $this->assertEquals(555, $obj->run());
    }
}
<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

use function time;

final class TimeTest extends TestCase
{
    public function testRun()
    {
        $this->assertEquals(`date +%s`, time());
    }

    public function testRun2()
    {
        MockerState::addCondition(
            '',
            'time',
            [],
            100
        );

        $this->assertEquals(100, time());
    }

    public function testRun3()
    {
        $this->assertEquals(`date +%s`, time());
    }

    public function testRun4()
    {
        $now = time();
        sleep(1);
        $next = time();

        $this->assertEquals(1, $next - $now);
    }
}
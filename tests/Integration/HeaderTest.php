<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

final class HeaderTest extends TestCase
{
    public function testRun()
    {
        header('Content-Type: application/json');

        $trace = MockerState::getTraces(
            '',
            'header',
        );

        $this->assertEquals(['Content-Type: application/json', true, 0], $trace[0]['arguments']);
    }
}
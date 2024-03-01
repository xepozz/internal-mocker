<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;

final class HeadersSentTest extends TestCase
{
    public function testCheckReferences()
    {
        MockerState::addCondition(
            '',
            'headers_sent',
            [null, null],
            fn (&$file, &$line) => $file = $line = 123,
        );
        headers_sent($file, $line);

        $trace = MockerState::getTraces(
            '',
            'headers_sent',
        );

        $this->assertEquals(123, $file);
        $this->assertEquals(123, $line);
        $this->assertEquals([123, 123], $trace[0]['arguments']);
    }
}
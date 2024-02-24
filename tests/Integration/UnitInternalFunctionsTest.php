<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\UnixInternalFunctions;

final class UnitInternalFunctionsTest extends TestCase
{
    public function testTime()
    {
        $this->assertEquals(`date +%s`, UnixInternalFunctions::time());
    }
}
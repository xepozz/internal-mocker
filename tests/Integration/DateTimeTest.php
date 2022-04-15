<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests\Integration;

use PHPUnit\Framework\TestCase;

class DateTimeTest extends TestCase
{
    public function testRun()
    {
        $obj = new DateTime();

        $this->assertEquals(555, $obj->run());
    }
}
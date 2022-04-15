<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests\Integration;

use PHPUnit\Framework\TestCase;

class StrContainsTest extends TestCase
{
    public function testRun()
    {
        $obj = new StrContains();

        $this->assertFalse($obj->run('string', 'str'));
    }

    public function testRun2()
    {
        $obj = new StrContains();

        $this->assertFalse($obj->run('string2', 'str'));
    }

    public function testRun3()
    {
        $obj = new StrContains();

        $this->assertTrue($obj->run('string3', 'str'));
    }
}
<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests\Integration;

class DateTime
{
    public function run(): int
    {
        return time();
    }
}
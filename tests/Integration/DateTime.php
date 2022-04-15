<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMocker\Tests\Integration;

class DateTime
{
    public function run(): int
    {
        return time();
    }
}
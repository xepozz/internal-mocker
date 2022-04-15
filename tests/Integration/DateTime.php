<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

class DateTime
{
    public function run(): int
    {
        return time();
    }
}
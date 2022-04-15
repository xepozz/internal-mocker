<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMocker\Tests\Integration;

class StrContains
{
    public function run(string $haystack, string $needle): bool
    {
        return str_contains($haystack, $needle);
    }
}
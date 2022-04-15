<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests\Integration;

class StrContains
{
    public function run(string $haystack, string $needle): bool
    {
        return str_contains($haystack, $needle);
    }
}
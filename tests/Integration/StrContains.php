<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

final class StrContains
{
    public function run(string $haystack, string $needle): bool
    {
        return str_contains($haystack, $needle);
    }
}
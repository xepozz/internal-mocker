<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use RuntimeException;

final class Stub
{
    public function __construct()
    {
        if (!function_exists('function_exists')) {
            throw new RuntimeException('The function `function_exists` is not registered.');
        }
    }
}
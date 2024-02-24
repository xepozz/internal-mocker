<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker;

class UnixInternalFunctions
{
    public static function time(): int
    {
        return (int) `date +%s`;
    }
}
<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

final class UseInSucceedDataProviderStub
{
    public function run(string $value): string
    {
        return serialize($value);
    }
}
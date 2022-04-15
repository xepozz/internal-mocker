<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests;

use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\Runner\BeforeTestHook;
use Xepozz\InternalMocker\Mocker;
use Xepozz\InternalMocker\MockerState;

final class Listener implements BeforeFirstTestHook, BeforeTestHook
{
    public function executeBeforeFirstTest(): void
    {
        $mocks = [
            [
                'namespace' => 'Xepozz\InternalMocker\Tests\Integration',
                'name' => 'time',
                'result' => 555,
                'arguments' => [],
            ],
            [
                'namespace' => 'Xepozz\InternalMocker\Tests\Integration',
                'name' => 'str_contains',
                'result' => false,
                'arguments' => [
                    'haystack' => 'string',
                    'needle' => 'str',
                ],
            ],
            [
                'namespace' => 'Xepozz\InternalMocker\Tests\Integration',
                'name' => 'str_contains',
                'result' => false,
                'arguments' => [
                    'haystack' => 'string2',
                    'needle' => 'str',
                ],
            ],
            [
                'namespace' => 'ASD',
                'name' => 'only_runtime',
            ],
        ];

        $mocker = new Mocker();
        $mocker->load($mocks);
        MockerState::saveState();
    }

    public function executeBeforeTest(string $test): void
    {
        MockerState::resetState();
    }
}
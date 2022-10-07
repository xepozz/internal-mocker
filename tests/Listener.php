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
                'namespace' => 'Xepozz\\InternalMocker',
                'name' => 'function_exists',
            ],
            [
                'namespace' => 'Xepozz\InternalMocker\Tests\Integration',
                'name' => 'class_exists',
                'default' => true,
                'result' => true,
            ],
            [
                'namespace' => 'Xepozz\\InternalMocker\\Tests\\Integration',
                'name' => 'time',
                'arguments' => [],
                'result' => 555,
            ],
            [
                'namespace' => 'Xepozz\\InternalMocker\\Tests\\Integration',
                'name' => 'str_contains',
                'arguments' => [
                    'haystack' => 'string',
                    'needle' => 'str',
                ],
                'result' => false,
            ],
            [
                'namespace' => 'Xepozz\\InternalMocker\\Tests\\Integration',
                'name' => 'str_contains',
                'arguments' => [
                    'haystack' => 'string2',
                    'needle' => 'str',
                ],
                'result' => false,
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
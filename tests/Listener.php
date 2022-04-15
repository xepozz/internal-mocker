<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMocker\Tests;

use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\Runner\BeforeTestHook;
use Xepozz\InternalFunctionMocker\Mocker;
use Xepozz\InternalFunctionMocker\MockerState;

final class Listener implements BeforeFirstTestHook, BeforeTestHook
{
    public function executeBeforeFirstTest(): void
    {
        $mocks = [
            [
                'namespace' => 'Xepozz\InternalFunctionMocker\Tests\Integration',
                'name' => 'time',
                'result' => 555,
                'arguments' => [],
            ],
            [
                'namespace' => 'Xepozz\InternalFunctionMocker\Tests\Integration',
                'name' => 'str_contains',
                'result' => false,
                'arguments' => [
                    'haystack' => 'string',
                    'needle' => 'str',
                ],
            ],
            [
                'namespace' => 'Xepozz\InternalFunctionMocker\Tests\Integration',
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
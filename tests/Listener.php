<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests;

use PHPUnit\Runner\BeforeFirstTestHook;
use Xepozz\InternalFunctionMock\Mocker;

final class Listener implements BeforeFirstTestHook
{
    public function executeBeforeFirstTest(): void
    {
        $mocks = [
            [
                'namespace' => 'Xepozz\InternalFunctionMock\Tests\Integration',
                'name' => 'time',
                'result' => 555,
                'arguments' => [],
            ],
            [
                'namespace' => 'Xepozz\InternalFunctionMock\Tests\Integration',
                'name' => 'str_contains',
                'result' => false,
                'arguments' => [
                    'haystack' => 'string',
                    'needle' => 'str',
                ],
            ],
            [
                'namespace' => 'Xepozz\InternalFunctionMock\Tests\Integration',
                'name' => 'str_contains',
                'result' => false,
                'arguments' => [
                    'haystack' => 'string2',
                    'needle' => 'str',
                ],
            ],
        ];

        $mocker = new Mocker();
        $mocker->load($mocks);
    }
}
<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests;

use PHPUnit\Event\Test\PreparationStarted;
use PHPUnit\Event\Test\PreparationStartedSubscriber;
use PHPUnit\Event\TestSuite\Started;
use PHPUnit\Event\TestSuite\StartedSubscriber;
use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\Runner\BeforeTestHook;
use PHPUnit\Runner\Extension\Extension;
use PHPUnit\Runner\Extension\Facade;
use PHPUnit\Runner\Extension\ParameterCollection;
use PHPUnit\TextUI\Configuration\Configuration;
use Xepozz\InternalMocker\Mocker;
use Xepozz\InternalMocker\MockerState;

if (interface_exists(Extension::class)) {
    abstract class PHPUnitExtension implements Extension
    {
    }
} else {
    abstract class PHPUnitExtension implements BeforeFirstTestHook, BeforeTestHook
    {
    }
}

final class MockerExtension extends PHPUnitExtension
{
    // phpunit 9 compatibility
    public function executeBeforeFirstTest(): void
    {
        self::load();
    }

    // phpunit 9 compatibility
    public function executeBeforeTest(string $test): void
    {
        MockerState::resetState();
    }

    // phpunit 10 compatibility
    public function bootstrap(Configuration $configuration, Facade $facade, ParameterCollection $parameters): void
    {
        $facade->registerSubscribers(
            new class () implements StartedSubscriber {
                public function notify(Started $event): void
                {
                    MockerExtension::load();
                }
            },
            new class implements PreparationStartedSubscriber {
                public function notify(PreparationStarted $event): void
                {
                    MockerState::resetState();
                }
            },
        );
    }

    public static function load(): void
    {
        $mocks = [
            [
                'namespace' => 'Xepozz\InternalMocker\Tests\Integration',
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
                'name' => 'serialize',
            ],
            [
                'namespace' => 'Xepozz\\InternalMocker\\Tests\\Integration',
                'name' => 'unserialize',
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
            [
                'namespace' => '',
                'name' => 'time',
                'function' => fn () => `date +%s`,
            ],
            [
                'namespace' => '',
                'name' => 'header',
                'function' => fn (string $value) => true,
            ],
            [
                'namespace' => '',
                'name' => 'headers_sent',
            ],
        ];

        $mocker = new Mocker();
        $mocker->load($mocks);
        MockerState::saveState();
    }

}
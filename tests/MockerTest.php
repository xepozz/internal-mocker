<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\Mocker;
use Xepozz\InternalMocker\MockerState;

final class MockerTest extends TestCase
{
    /**
     * @dataProvider generateProvider
     */
    public function testGenerate(array $mocks, string $expected)
    {
//        $this->markTestSkipped();
        $mocker = new Mocker(__DIR__ . '/data/mocks.php');

        $this->assertEquals($expected, $mocker->generate($mocks));
    }

    public function generateProvider()
    {
        return [
            [
                [
                    [
                        'namespace' => 'Xepozz\InternalMocker\Tests\Integration',
                        'name' => 'time',
                        'result' => 555,
                        'arguments' => [],
                    ],
                ],
                <<<PHP
                namespace Xepozz\InternalMocker;
                MockerState::addCondition(
                    "Xepozz\InternalMocker\Tests\Integration", 
                    "time",
                    [],
                    555
                );
                
                
                namespace Xepozz\InternalMocker\Tests\Integration;
                
                use Xepozz\InternalMocker\MockerState;
                
                function time(...\$arguments)
                {
                    if (MockerState::checkCondition(__NAMESPACE__, "time", \$arguments)) {
                        return MockerState::getResult(__NAMESPACE__, "time", \$arguments);
                    }
                    return \\time(...\$arguments);
                }
                PHP,
            ],
            [
                [
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
                ],
                <<<PHP
                namespace Xepozz\InternalMocker;
                MockerState::addCondition(
                    "Xepozz\InternalMocker\Tests\Integration", 
                    "str_contains",
                    ['haystack' => 'string','needle' => 'str'],
                    false
                );
                MockerState::addCondition(
                    "Xepozz\InternalMocker\Tests\Integration", 
                    "str_contains",
                    ['haystack' => 'string2','needle' => 'str'],
                    false
                );


                namespace Xepozz\InternalMocker\Tests\Integration;
                
                use Xepozz\InternalMocker\MockerState;

                function str_contains(...\$arguments)
                {
                    if (MockerState::checkCondition(__NAMESPACE__, "str_contains", \$arguments)) {
                        return MockerState::getResult(__NAMESPACE__, "str_contains", \$arguments);
                    }
                    return \str_contains(...\$arguments);
                }
                PHP,
            ],
        ];
    }
}
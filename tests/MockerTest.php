<?php
declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\Mocker;

final class MockerTest extends TestCase
{
    /**
     * @dataProvider generateProvider
     */
    public function testGenerate(array $mocks, string $expected)
    {
        $mocker = new Mocker();

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
                namespace {
                    use Xepozz\InternalMocker\MockerState;

                    MockerState::addCondition(
                        "Xepozz\InternalMocker\Tests\Integration",
                        "time",
                        [],
                        555,
                        false,
                    );
                }
                
                
                namespace Xepozz\InternalMocker\Tests\Integration {
                    use Xepozz\InternalMocker\MockerState;

                    function time()
                    {
                        \$position = MockerState::saveTrace(__NAMESPACE__, "time", );
                        if (MockerState::checkCondition(__NAMESPACE__, "time", [])) {
                            \$result = MockerState::getResult(__NAMESPACE__, "time", );
                        } else {
                            \$result = MockerState::getDefaultResult(__NAMESPACE__, "time", fn() => \\time(), );
                        }
                        
                        return MockerState::saveTraceResult(__NAMESPACE__, "time", \$position, \$result);
                    }
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
                namespace {
                    use Xepozz\InternalMocker\MockerState;

                    MockerState::addCondition(
                        "Xepozz\InternalMocker\Tests\Integration",
                        "str_contains",
                        ['haystack' => 'string','needle' => 'str'],
                        false,
                        false,
                    );
                    MockerState::addCondition(
                        "Xepozz\InternalMocker\Tests\Integration",
                        "str_contains",
                        ['haystack' => 'string2','needle' => 'str'],
                        false,
                        false,
                    );
                }


                namespace Xepozz\InternalMocker\Tests\Integration {
                    use Xepozz\InternalMocker\MockerState;

                    function str_contains(string \$haystack, string \$needle)
                    {
                        \$position = MockerState::saveTrace(__NAMESPACE__, "str_contains", \$haystack, \$needle);
                        if (MockerState::checkCondition(__NAMESPACE__, "str_contains", [\$haystack, \$needle])) {
                            \$result = MockerState::getResult(__NAMESPACE__, "str_contains", \$haystack, \$needle);
                        } else {
                            \$result = MockerState::getDefaultResult(__NAMESPACE__, "str_contains", fn(string \$haystack, string \$needle) => \\str_contains(\$haystack, \$needle), \$haystack, \$needle);
                        }
                        
                        return MockerState::saveTraceResult(__NAMESPACE__, "str_contains", \$position, \$result);
                    }
                }
                PHP,
            ],
        ];
    }
}
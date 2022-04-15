<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalFunctionMock\Mocker;
use Xepozz\InternalFunctionMock\MockerConfig;

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
                        'namespace' => 'Xepozz\InternalFunctionMock\Tests\Integration',
                        'name' => 'time',
                        'result' => 555,
                        'arguments' => [],
                    ],
                ],
                <<<PHP
                namespace Xepozz\InternalFunctionMock;
                MockerConfig::addCondition(
                    "Xepozz\InternalFunctionMock\Tests\Integration", 
                    "time",
                    [],
                    555
                );
                
                
                namespace Xepozz\InternalFunctionMock\Tests\Integration;
                
                use Xepozz\InternalFunctionMock\MockerConfig;
                
                function time(...\$arguments)
                {
                    if (MockerConfig::checkCondition(__NAMESPACE__, "time", \$arguments)) {
                        return MockerConfig::getResult(__NAMESPACE__, "time", \$arguments);
                    }
                    return \\time(...\$arguments);
                }
                PHP,
            ],
            [
                [
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
                ],
                <<<PHP
                namespace Xepozz\InternalFunctionMock;
                MockerConfig::addCondition(
                    "Xepozz\InternalFunctionMock\Tests\Integration", 
                    "str_contains",
                    ['haystack' => 'string','needle' => 'str'],
                    false
                );
                MockerConfig::addCondition(
                    "Xepozz\InternalFunctionMock\Tests\Integration", 
                    "str_contains",
                    ['haystack' => 'string2','needle' => 'str'],
                    false
                );


                namespace Xepozz\InternalFunctionMock\Tests\Integration;
                
                use Xepozz\InternalFunctionMock\MockerConfig;

                function str_contains(...\$arguments)
                {
                    if (MockerConfig::checkCondition(__NAMESPACE__, "str_contains", \$arguments)) {
                        return MockerConfig::getResult(__NAMESPACE__, "str_contains", \$arguments);
                    }
                    return \str_contains(...\$arguments);
                }
                PHP,
            ],
        ];
    }
}
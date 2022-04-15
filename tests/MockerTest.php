<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMocker\Tests;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalFunctionMocker\Mocker;
use Xepozz\InternalFunctionMocker\MockerConfig;

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
                        'namespace' => 'Xepozz\InternalFunctionMocker\Tests\Integration',
                        'name' => 'time',
                        'result' => 555,
                        'arguments' => [],
                    ],
                ],
                <<<PHP
                namespace Xepozz\InternalFunctionMocker;
                MockerConfig::addCondition(
                    "Xepozz\InternalFunctionMocker\Tests\Integration", 
                    "time",
                    [],
                    555
                );
                
                
                namespace Xepozz\InternalFunctionMocker\Tests\Integration;
                
                use Xepozz\InternalFunctionMocker\MockerConfig;
                
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
                ],
                <<<PHP
                namespace Xepozz\InternalFunctionMocker;
                MockerConfig::addCondition(
                    "Xepozz\InternalFunctionMocker\Tests\Integration", 
                    "str_contains",
                    ['haystack' => 'string','needle' => 'str'],
                    false
                );
                MockerConfig::addCondition(
                    "Xepozz\InternalFunctionMocker\Tests\Integration", 
                    "str_contains",
                    ['haystack' => 'string2','needle' => 'str'],
                    false
                );


                namespace Xepozz\InternalFunctionMocker\Tests\Integration;
                
                use Xepozz\InternalFunctionMocker\MockerConfig;

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
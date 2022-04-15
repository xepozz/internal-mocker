<?php
declare(strict_types=1);

namespace Xepozz\InternalFunctionMock\Tests;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalFunctionMock\Mocker;

final class MockerTest extends TestCase
{
    /**
     * @dataProvider generateProvider
     */
    public function testGenerate(array $mocks, string $expected)
    {
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
                namespace Xepozz\InternalFunctionMock\Tests\Integration;
                {
                    function time(...\$arguments)
                    {
                        if (\$arguments === [] || \$arguments === []) {
                            return 555;
                        }
                        return \\time(...\$arguments);
                    }
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
                <<<"PHP"
                namespace Xepozz\InternalFunctionMock\Tests\Integration;
                {
                    function str_contains(...\$arguments)
                    {
                        if (\$arguments === ['haystack' => 'string','needle' => 'str'] || \$arguments === ['string','str']) {
                            return false;
                        }
                        if (\$arguments === ['haystack' => 'string2','needle' => 'str'] || \$arguments === ['string2','str']) {
                            return false;
                        }
                        return \str_contains(...\$arguments);
                    }
                }
                PHP,
            ],
        ];
    }
}
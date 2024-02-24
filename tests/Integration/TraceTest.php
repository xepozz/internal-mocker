<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;
use Xepozz\InternalMocker\Tests\MockerExtension;

final class TraceTest extends TestCase
{
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        MockerExtension::load();
        parent::__construct($name, $data, $dataName);
    }

    public function testLogs(): void
    {
        $object = new UseInSucceedDataProviderStub();
        $object->run('test');
        $object->run('test2');
        $object->run('test3');

        $traces = MockerState::getTraces(
            __NAMESPACE__,
            'serialize',
        );

        $this->assertIsArray($traces);

        $this->assertCount(3, $traces);

        foreach ($traces as $trace) {
            $this->assertArrayHasKey('arguments', $trace);
            $this->assertArrayHasKey('result', $trace);

            $this->assertIsArray($trace['arguments']);
            $this->assertIsArray($trace['trace']);
            $this->assertIsString($trace['result']);
        }

        $this->assertEquals(['test'], $traces[0]['arguments']);
        $this->assertEquals('s:4:"test";', $traces[0]['result']);

        $this->assertEquals(['test2'], $traces[1]['arguments']);
        $this->assertEquals('s:5:"test2";', $traces[1]['result']);

        $this->assertEquals(['test3'], $traces[2]['arguments']);
        $this->assertEquals('s:5:"test3";', $traces[2]['result']);
    }

    public function testBacktrace(): void
    {
        $object = new UseInSucceedDataProviderStub();
        $object->run('test');

        $traces = MockerState::getTraces(
            __NAMESPACE__,
            'serialize',
        );

        $this->assertIsArray($traces);

        $this->assertCount(1, $traces);

        $this->assertEquals(['test'], $traces[0]['arguments']);
        $this->assertEquals('saveTrace', $traces[0]['trace'][0]['function']);
        $this->assertEquals(120, $traces[0]['trace'][0]['line']);
        $this->assertEquals(
            [
                __NAMESPACE__,
                'serialize',
                ['test'],
            ],
            $traces[0]['trace'][0]['args'],
        );

        $this->assertEquals(__NAMESPACE__ . '\serialize', $traces[0]['trace'][1]['function']);
        $this->assertEquals(11, $traces[0]['trace'][1]['line']);
        $this->assertEquals(['test'], $traces[0]['trace'][1]['args']);
    }
}
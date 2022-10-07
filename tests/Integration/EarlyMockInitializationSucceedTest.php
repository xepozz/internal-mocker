<?php

declare(strict_types=1);

namespace Xepozz\InternalMocker\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Xepozz\InternalMocker\MockerState;
use Xepozz\InternalMocker\Tests\MockerExtension;

final class EarlyMockInitializationSucceedTest extends TestCase
{
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        MockerExtension::load();
        parent::__construct($name, $data, $dataName);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testRun(UseInSucceedDataProviderStub $object): void
    {
        MockerState::addCondition(
            __NAMESPACE__,
            'serialize',
            ['asd'],
            'not serialized'
        );
        $this->assertEquals('not serialized', $object->run('asd'));
    }

    public function dataProvider(): array
    {
        return [
            [new UseInSucceedDataProviderStub()],
        ];
    }
}
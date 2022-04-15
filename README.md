# Introduction

The package helps mock internal php functions as simple as it can. You can use this package when you need mock such
functions as: `time()`, `str_contains()` and etc.

## Installation

```bash
composer require xepozz/internal-mocker --dev
```

## Usage

The main idea is simple: register Listener of PHPUnit and call Mocker at first.

### Register hook

1. Create new file `tests/MockerExtension.php`
2. Paste the following code into the created file:
    ```php
    <?php
    declare(strict_types=1);
    
    namespace App\Tests;
    
    use PHPUnit\Runner\BeforeTestHook;
    use PHPUnit\Runner\BeforeFirstTestHook;
    use Xepozz\InternalMocker\Mocker;
    use Xepozz\InternalMocker\MockerState;
    
    final class MockerExtension implements BeforeTestHook, BeforeFirstTestHook
    {
        public function executeBeforeFirstTest(): void
        {
            $mocks = [];
    
            $mocker = new Mocker();
            $mocker->load($mocks);
            MockerState::saveState();
        }
   
        public function executeBeforeTest(string $test): void
        {
            MockerState::resetState();
        }
    }
    ```
3. Register the hook as extension in `phpunit.xml.dist`
    ```xml
    <extensions>
        <extension class="App\Tests\MockerExtension"/>
    </extensions>
    ```

Here you have registered extension that will be called every time when you run `./vendor/bin/phpunit`.

### Register mocks

The package supports a few ways to mock functions:

1. Runtime mock
2. Pre-defined mock
3. Mix of two previous ways

#### Runtime mock

If you want to make your test case to be used with mocked function you should register it before.

Back to the created `MockerExtension::executeBeforeFirstTest` and edit the `$mocks` var.

```php
$mocks = [
    [
        'namespace' => 'App\Service',
        'name' => 'time',
    ],
];
```

This mock will proxy every call of `time()` under the namespace `App\Service` through a generated wrapper.

When you want to mock result in tests you should write the following code into needed test case:

```php
MockerState::addCondition(
   'App\Service',
   'time',
   [],
   100
);
```

So your test case will look like the following:

```php
<?php
namespace App\Tests;

use App\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testRun2(): void
    {
        $service = new Service();

        MockerState::addCondition(
            'App\Service',
            'time',
            [],
            100
        );

        $this->assertEquals(100, $service->doSomething());
   }
}
```

See full example
in [`\Xepozz\InternalMocker\Tests\Integration\DateTimeTest::testRun2`](tests/Integration/DateTimeTest.php)

#### Pre-defined mock

Pre-defined mocks allow you to mock behaviour globally.

It means that you don't need to write `MockerState::addCondition(...)` into each test case if you want to mock it for
whole project.

> Keep in the mind that the same function in different namespaces is not the same for `Mocker`.

So back to the created `MockerExtension::executeBeforeFirstTest` and edit the `$mocks` var.

```php
$mocks = [
    [
        'namespace' => 'App\Service',
        'name' => 'time',
        'result' => 150,
        'arguments' => [],
    ],
];
```

After this variant each `App\Service\time()` will return `150`.

You can add a lot of mocks. `Mocker` compares the `arguments` values with arguments of calling function and returns
needed result.

#### Mix of two previous ways

Mix means that you can use **_Pre-defined mock_** at first and **_Runtime mock_** after.

### State

If you use `Runtime mock` you may face the problem that after mocking function you still have it mocked in another test
cases.

`MockerState::saveState()` and `MockerState::resetState()` solves this problem.

These methods save "current" state and unload each `Runtime mock` mock that was applied.

Using `MockerState::saveState()` after `Mocker->load($mocks)` saves only **_Pre-defined_** mocks.

## Restrictions

You should use function without using root namespace aliasing.

#### Good example

```php
namespace App\Service

class SomeService
{
    public function doSomething()
    {
        // ...
        time()
        // ...
    }
}
```

#### Bad examples

Make sure that function doesn't have leading backslash.

```php
namespace App\Service

class SomeService
{
    public function doSomething()
    {
        // ...
        \time()
        // ...
    }
}
```

Make sure that function isn't included into `use` section.

```php
namespace App\Service

use function time;

class SomeService
{
    public function doSomething()
    {
        // ...
        time()
        // ...
    }
}
```
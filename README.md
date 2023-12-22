# Introduction

The package helps mock internal php functions as simple as possible. Use this package when you need mock such
functions as: `time()`, `str_contains()`, `rand`, etc.

[![Latest Stable Version](https://poser.pugx.org/xepozz/internal-mocker/v/stable.svg)](https://packagist.org/packages/xepozz/internal-mocker)
[![Total Downloads](https://poser.pugx.org/xepozz/internal-mocker/downloads.svg)](https://packagist.org/packages/xepozz/internal-mocker)
[![phpunit](https://github.com/xepozz/internal-mocker/workflows/PHPUnit/badge.svg)](https://github.com/xepozz/internal-mocker/actions)

## Installation

```bash
composer require xepozz/internal-mocker --dev
```

## Usage

The main idea is pretty simple: register a Listener for PHPUnit and call the Mocker extension first.

### Register a hook

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

1. Runtime mocks
2. Pre-defined mocks
3. Mix of two previous ways

#### Runtime mocks

If you want to make your test case to be used with mocked function you should register it before.

Back to the created `MockerExtension::executeBeforeFirstTest` and edit the `$mocks` variable.

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
   'App\Service', // namespace
   'time', // function name
   [], // arguments
   100 // result
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

> Keep in mind that the same functions from different namespaces are not the same for `Mocker`.

So back to the created `MockerExtension::executeBeforeFirstTest` and edit the `$mocks` variable.

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

## Global namespaced functions

### Internal functions

Without any additional configuration you can mock only functions that are defined under any not global
namespaces: `App\`, `App\Service\`, etc.
But you cannot mock functions that are defined under global namespace or defined in a `use` statement, e.g. `use time;`
or `\time();`.

#### Workaround

The way you can mock global functions is to disable them
in `php.ini`: https://www.php.net/manual/en/ini.core.php#ini.disable-functions

The best way is to disable them only for tests by running a command with the additional flags:

```bash
php -ddisable_functions=${functions} ./vendor/bin/phpunit
```

> Replace `${functions}` with the list of functions that you want to mock, separated by commas, e.g.: `time,rand`.

So now you can mock global functions as well.

#### Internal function implementation

When you disable a function in `php.ini` you cannot call it anymore. That means you must implement it by yourself.

Obviously, almost all functions are implemented in PHP looks the same as the Bash ones.

The shortest way to implement a function is to use ``` `bash command` ``` syntax:

```php
$mocks[] = [
   'namespace' => '',
   'name' => 'time',
   'function' => fn () => `date +%s`,
];
```

## Restrictions

### Data Providers

Sometimes you may face unpleasant situation when mocked function is not mocking without forced using `namespace`
+ `function`.
It may mean that you are trying make PHP interpreter file in `@dataProvider`.
Be careful of it and as a workaround I may suggest you to call the mocker in test's constructor.
So first move all code from your extension method `executeBeforeFirstTest` to new static method
and call it in both `executeBeforeFirstTest` and `__construct` methods.

```php
final class MyTest extends \PHPUnit\Framework\TestCase
{
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        \App\Tests\MockerExtension::load();
        parent::__construct($name, $data, $dataName);
    }
    
    /// ...
}
```

```php
final class MockerExtension implements BeforeTestHook, BeforeFirstTestHook
{
    public function executeBeforeFirstTest(): void
    {
        self::load();
    }

    public static function load(): void
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

That all because of PHPUnit 9.5 and lower event management system.
Data Provider functionality starts to work before any events, so it's impossible to mock the function at the beginning
of
the runtime.  

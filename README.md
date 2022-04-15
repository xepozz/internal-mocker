# Introduction

The package helps mock internal php functions as simple as it can. You can use this package when you need mock such
functions as: `time()`, `str_contains()` and etc.

## Usage

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
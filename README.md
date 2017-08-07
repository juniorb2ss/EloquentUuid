# Eloquent UUID Trait

The `juniorb2ss/eloquent-uuid` provider a simple trait to implement UUID to ORM.

## Install

You can install this package via composer:

``` bash
$ composer require juniorb2ss/eloquent-uuid
```

## Eloquent Trait

```php

use juniorb2ss\EloquentUuid\EloquentUuidTrait;

class User extends Authenticatable
{
    use Notifiable, EloquentUuidTrait;
    //...
}
```

## Tests

```bash
composer run test
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Carlos Eduardo](https://github.com/juniorb2ss)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
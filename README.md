# Eloquent UUID Trait

[![Build Status](https://travis-ci.org/juniorb2ss/EloquentUuid.svg?branch=master)](https://travis-ci.org/juniorb2ss/EloquentUuid) [![Code Coverage](https://scrutinizer-ci.com/g/juniorb2ss/EloquentUuid/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/juniorb2ss/EloquentUuid/?branch=master) [![Laravel](https://img.shields.io/badge/Laravel-5.*-green.svg)](https://laravel.com) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/juniorb2ss/EloquentUuid/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/juniorb2ss/EloquentUuid/?branch=master) [![StyleCI](https://styleci.io/repos/99608750/shield?branch=master)](https://styleci.io/repos/84957945) [![Code Climate](https://codeclimate.com/github/juniorb2ss/EloquentUuid/badges/gpa.svg)](https://codeclimate.com/github/juniorb2ss/EloquentUuid) 


The `juniorb2ss/eloquent-uuid` provider a simple trait to implement UUID to ORM.

## Install

You can install this package via composer:

``` bash
$ composer require juniorb2ss/eloquent-uuid~1.*
```

## Eloquent Trait

```php
use juniorb2ss\EloquentUuid\EloquentUuidTrait;

class User extends Authenticatable
{
    use Notifiable, EloquentUuidTrait;
    
    /**
    * UUID Column name used
    * 
    * @var string
    * @optional 
    */
    protected $uuidKey = 'uuid';
}
```

## UUID Column
You need create new column in table model like `uuid` or custom name you can define in `uuidKey` model property

## Scope On UUID

```php
use App\User;

$user = (new User)->onUuid('aae5f3f1-0f22-4a8b-9291-d2a9649d1490')
                  ->firstOrFail();
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
# Add many address to many model with a single trait. E.g.: many shipping address for a customer.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zoparga/laravel-model-status.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-model-status)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-model-status/run-tests?label=tests)](https://github.com/zoparga/laravel-model-status/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/zoparga/laravel-model-status/Check%20&%20fix%20styling?label=code%20style)](https://github.com/zoparga/laravel-model-status/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zoparga/laravel-model-status.svg?style=flat-square)](https://packagist.org/packages/zoparga/laravel-model-status)



## Installation

You can install the package via composer:

```bash
composer require zoparga/laravel-model-status
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="zoparga\ModelStatus\ModelStatusServiceProvider" --tag="model-status-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="zoparga\ModelStatus\ModelStatusServiceProvider" --tag="laravel-model-status-config"
```

This is the contents of the published config file:

## Usage

- publish migration file
- migrate
- add trait to model
- use it

## Prepare model


use zoparga\ModelStatus\Traits\ModelStatuseableTrait;

class {{model}} extends Model
{
    use ModelStatuseableTrait;
}

```php

$model = \App\Models\Model::find(1);

$model->modelStatuses()->create([
        'name' => 'Default',
        'order' => 1,
        'is_enabled' => 1,
]);

$modelStatusId = 1;

$model->updateModelStatus($modelStatusId, [
        'name' => 'Ongoing',
        'order' => 2,
        'is_enabled' => 0,
]);


Or you can limit it here
$model->getLatestModelStatuses()->get();

Or you can limit it here
$model->getLatestModelStatuses()->limit(3)->get();

Of course you can get last created model status
$model->getLastModelStatus();


```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Papp Zoltán](https://github.com/zoparga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

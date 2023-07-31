
# ByKitLaravel is Laravel PackageKit 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bykit/laravel.svg?style=flat-square)](https://packagist.org/packages/bykit/laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bykit/laravel/run-tests?label=tests)](https://github.com/bykit/laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bykit/laravel/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/bykit/laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bykit/laravel.svg?style=flat-square)](https://packagist.org/packages/bykit/laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

- [https://bit-sudo.com](https://bit-sudo.com)

## Installation

You can install the package via composer:

```bash
composer require bykit/laravel
```

```php
//
use Illuminate\Support\ServiceProvider;
use ByKit\Laravel\ServicePackage;
use ByKit\Platform\Traits\WithServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    use WithServiceProvider;

    public function configurePackage(ServicePackage $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('demo')
            ->hasConfigFile()
            ->hasViews()
            ->hasHelpers()
            ->hasAssets()
            ->hasTranslations()
            ->runsMigrations();
    }
    public function extending()
    {
    }
    public function packageRegistered()
    {
        $this->extending();
    }
    private function bootGate()
    {
        if (!$this->app->runningInConsole()) {
            add_filter(PLATFORM_PERMISSION_CUSTOME, function ($prev) {
                return [
                    ...$prev
                ];
            });
        }
    }
    public function packageBooted()
    {
        $this->bootGate();
    }
}

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ByKit](https://github.com/bykit)
- [Nguyen Van Hau](https://github.com/devhau)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
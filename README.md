# CURRENTLY IN DEVELOPMENT

# This is my package laravel-azure-queue-driver

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jesperfiltenborg/laravel-azure-queue-driver.svg?style=flat-square)](https://packagist.org/packages/jesperfiltenborg/laravel-azure-queue-driver)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jesperfiltenborg/laravel-azure-queue-driver/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jesperfiltenborg/laravel-azure-queue-driver/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jesperfiltenborg/laravel-azure-queue-driver/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jesperfiltenborg/laravel-azure-queue-driver/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jesperfiltenborg/laravel-azure-queue-driver.svg?style=flat-square)](https://packagist.org/packages/jesperfiltenborg/laravel-azure-queue-driver)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-azure-queue-driver.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-azure-queue-driver)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require jesperfiltenborg/laravel-azure-queue-driver
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-azure-queue-driver-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-azure-queue-driver-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-azure-queue-driver-views"
```

## Usage

```php
$laravelAzureQueueDriver = new JesperFiltenborg\LaravelAzureQueueDriver();
echo $laravelAzureQueueDriver->echoPhrase('Hello, JesperFiltenborg!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [JesperFiltenborg](https://github.com/JesperFiltenborg)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.








## Config

In the config queue.php file, you can set the connection to azure like this:
```php
'connections' => [
    *...
    'azure' => [
        'driver' => 'azure',
        'key' => env('AZURE_ACCESS_KEY'),
        'secret' => env('AZURE_SECRET_ACCESS_KEY'),
        'prefix' => env('AZURE_URL', 'https://your-account.servicebus.windows.net/'),
        'queue' => env('AZURE_QUEUE', 'default'),
        'region' => env('AZURE_DEFAULT_REGION', 'eu-west-1'),
        'version' => env('AZURE_VERSION', 'latest'),
        'http' => [
            'timeout' => env('AZURE_HTTP_TIMEOUT', 60),
            'connect_timeout' => env('AZURE_HTTP_CONNECT_TIMEOUT', 60),
        ],
        'after_commit' => false,
    ],
```

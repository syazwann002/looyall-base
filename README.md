# Looyall Base

## Installation

You can install the package via composer:

```bash
composer require looyall/looyall
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="looyall-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="looyall-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="looyall-views"
```

## Usage

```php
$looyall = new Looyall\Looyall();
echo $looyall->echoPhrase('Hello, Looyall!');
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

- [syazwann002](https://github.com/syazwann002)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

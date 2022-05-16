# Runtime Store

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stepanenko3/laravel-runtime-config.svg?style=flat-square)](https://packagist.org/packages/stepanenko3/laravel-runtime-config)
[![Total Downloads](https://img.shields.io/packagist/dt/stepanenko3/laravel-runtime-config.svg?style=flat-square)](https://packagist.org/packages/stepanenko3/laravel-runtime-config)
[![License](https://poser.pugx.org/stepanenko3/laravel-runtime-config/license)](https://packagist.org/packages/stepanenko3/laravel-runtime-config)

## Description

Runtime config based on collection for Laravel

## Requirements

- `php: >=8.0`
- `laravel/framework: ^9.0`

## Installation

```bash
# Install the package
composer require stepanenko3/laravel-runtime-config
```

## Usage

```php
use Stepanenko3\LaravelRuntimeConfig\Facades\RuntimeConfig;

RuntimeConfig::putMany([
    'demo' => 100,
]);

RuntimeConfig::get('demo'); // result: 100
runtime_config('demo'); // result: 100
```

## Credits

- [Artem Stepanenko](https://github.com/stepanenko3)

## Contributing

Thank you for considering contributing to this package! Please create a pull request with your contributions with detailed explanation of the changes you are proposing.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).

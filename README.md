# Runtime Store

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stepanenko3/laravel-runtime-config.svg?style=flat-square)](https://packagist.org/packages/stepanenko3/laravel-runtime-config)
[![Total Downloads](https://img.shields.io/packagist/dt/stepanenko3/laravel-runtime-config.svg?style=flat-square)](https://packagist.org/packages/stepanenko3/laravel-runtime-config)
[![License](https://poser.pugx.org/stepanenko3/laravel-runtime-config/license)](https://packagist.org/packages/stepanenko3/laravel-runtime-config)

## Description

Runtime config based on collection for Laravel

## Usage

``` php
use Stepanenko3\LaravelRuntimeConfig\Facades\RuntimeConfig;

RuntimeConfig::putMany([
    'demo' => 100,
]);

RuntimeConfig::get('demo'); // result: 100
runtime_config('demo'); // result: 100
```

## Install

Via Composer

``` bash
$ composer require stepanenko3/laravel-runtime-config
```

## Minimum requirements

- Laravel 9.0
- PHP 8.0

## Credits

- [Artem Stepanenko](http://github.io.com/stepanenko3)

## License

This package is licensed under the MIT License - see the `LICENSE` file for details

## Contributing

Pull requests and issues are welcome.

# Laravel Likes Button

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laraveldesign/like-button.svg?style=flat-square)](https://packagist.org/packages/laraveldesign/like-button)
[![Quality Score](https://img.shields.io/scrutinizer/g/laraveldesign/like-button.svg?style=flat-square)](https://scrutinizer-ci.com/g/laraveldesign/like-button)
[![Total Downloads](https://img.shields.io/packagist/dt/laraveldesign/like-button.svg?style=flat-square)](https://packagist.org/packages/laraveldesign/like-button)

Provides a like button system for Laravel projects.

## Installation

You can install the package via composer:

```bash
composer require laraveldesign/like-button
```

## Demo
Visit https://laraveldesign.com/packages for a demo.

## Usage

``` php
<livewire:like-button::like-button 
    :key="time().$model->id" 
    :model="$model">
</livewire:like-button::like-button>
```

### Testing

This package does not contain a test suite at this time.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email cshanebarron@gmail.com instead of using the issue tracker.

## Credits

- [Shane Barron](https://github.com/laraveldesign)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

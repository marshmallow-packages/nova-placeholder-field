![alt text](https://marshmallow.dev/cdn/media/logo-red-237x46.png "marshmallow.")

# Nova Placeholder field

This package adds a Placeholder field which you can use in Laravel Nova. This package only outputs some HTML in the forms of your resource. This is not a field to store any data, just to display some stuff.

<img src="/resources/img/nova-placeholder-field.png">

[![Version](https://img.shields.io/packagist/v/marshmallow/nova-placeholder)](https://github.com/marshmallow-packages/nova-placeholder)
[![Issues](https://img.shields.io/github/issues/marshmallow-packages/nova-placeholder)](https://github.com/marshmallow-packages/nova-placeholder)
[![Code Coverage](https://img.shields.io/badge/coverage-100%25-success)](https://github.com/marshmallow-packages/nova-placeholder)
[![Licence](https://img.shields.io/github/license/marshmallow-packages/nova-placeholder)](https://github.com/marshmallow-packages/nova-placeholder)

## Installation

You can install the package via composer:

```bash
composer require marshmallow/nova-placeholder
```

## Usage

Just add the HTML you want to output in the resource to the `content()` method. Thats it!

```php
use Marshmallow\Placeholder\Placeholder;

Placeholder::make(__('Planning'))
    ->content('Deze lead is planned to be completed on august 1. This will be done by <strong>John Doe</strong>.<br/><a href="">Click here</a> to view the full construction planning.'),
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email stef@marshmallow.dev instead of using the issue tracker.

## Credits

-   [Stef van Esch](https://github.com/stefvanesch)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

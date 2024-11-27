![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-comments/master/art/screenshot.jpg)

# Filament comments

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-comments/version.svg)](https://packagist.org/packages/tomatophp/filament-comments)
[![License](https://poser.pugx.org/tomatophp/filament-comments/license.svg)](https://packagist.org/packages/tomatophp/filament-comments)
[![Downloads](https://poser.pugx.org/tomatophp/filament-comments/d/total.svg)](https://packagist.org/packages/tomatophp/filament-comments)

Manage your comments on any models with support of reviews stars and full frontend Livewire component support for FilamentPHP

## Installation

```bash
composer require tomatophp/filament-comments
```
after install your package please run this command

```bash
php artisan filament-comments:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentComments\FilamentCommentsPlugin::make())
```


## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-comments-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-comments-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-comments-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-comments-migrations"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

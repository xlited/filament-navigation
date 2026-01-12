<p align="center" class="filament-hidden"><img src="art/social-card.png" alt="Social card of Filament Navigation"></p>

# Filament Navigation

[![Latest version on GitHub](https://img.shields.io/github/release/xlited/filament-navigation.svg?style=flat-square)](https://github.com/xlited/filament-navigation/releases)
[![Total downloads](https://img.shields.io/packagist/dt/xlited/filament-navigation.svg?style=flat-square)](https://packagist.org/packages/xlited/filament-navigation)
[![GitHub issues](https://img.shields.io/github/issues/xlited/filament-navigation?style=flat-square)](https://github.com/xlited/filament-navigation/issues)
[![License](https://img.shields.io/github/license/xlited/filament-navigation?style=flat-square)](https://github.com/xlited/filament-navigation/blob/main/LICENSE.md)

This plugin for Filament provides a `Navigation` resource that lets you build structural navigation menus with a clean drag-and-drop UI.

## Quick start

### Compatibility

For certain Filament versions, changes have to be made that render the package backwards incompatible with the previous version.
Please see the table below to determine which version you need.

| Version                                                       | Filament |
|---------------------------------------------------------------|----------|
| [v2](https://github.com/xlited/filament-navigation/tree/main) | \>=4.0   |
| v1 (current)                                                  | <4.0     |

**Please note:** the `main` branch will always be the latest major version.

### Installation

Start by installing the package via Composer:

```bash
composer require xlited/filament-navigation:^1.0
```

Next, run the migrations:

```sh
php artisan migrate
```

Finally, publish the package's assets:

```sh
php artisan filament:assets
```

### Usage

You first need to register the plugin with Filament. This can be done inside your `PanelProvider`, e.g. `AdminPanelProvider`:

```php
use Xlited\FilamentNavigation\FilamentNavigation;

return $panel
    ->plugin(FilamentNavigation::make());
```

If you wish to customise the navigation group, sort or icon, you can use the `NavigationResource::navigationGroup()`,
`NavigationResource::navigationSort()` and `NavigationResource::navigationIcon()` methods.

See [Basic usage](docs/basic-usage.md) for more information.

## Documentation

Please see the [documentation] for detailed information about installation and usage.

## Contributing

Please see [contributing] for more information about how you can contribute.

## Testing

```bash
composer test
```

## Changelog

Please see [changelog] for more information about what has changed recently.

## Upgrading

Please see [upgrading] for more information about how to upgrade.

## Security

Please see [security] for more information about how we deal with security.

## Credits

We would like to thank the following contributors for their contributions to this project:

- [Ryan Chandler](https://github.com/ryangjchandler) (original author)
- [All Contributors][all-contributors]

## License

The scripts and documentation in this project are released under the [MIT License][license].

---

<p align="center"><a href="https://xlite.dev/" target="_blank"><img src="https://xlite.dev/static/img/logo.svg" width="50" alt="Logo of Xlite Dev"></a></p>

[documentation]: docs
[contributing]: CONTRIBUTING.md
[changelog]: CHANGELOG.md
[upgrading]: UPGRADING.md
[security]: SECURITY.md
[email]: mailto:hello@xlite.dev
[all-contributors]: ../../contributors
[license]: LICENSE.md

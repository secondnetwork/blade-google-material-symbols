# Blade Google Material Symbols

[![Latest Stable Version](https://img.shields.io/packagist/v/secondnetwork/blade-google-material-symbols.svg?style=for-the-badge&labelColor=eb4432&color=1A2A2C)](https://github.com/secondnetwork/blade-google-material-symbols)
[![PHP 8.2](https://img.shields.io/badge/v8.2-999999?style=for-the-badge&label=PHP&labelColor=777BB4&color=1A2A2C)](https://php.com)		
[![License](https://img.shields.io/github/license/secondnetwork/blade-google-material-symbols?style=for-the-badge)](https://github.com/secondnetwork/blade-google-material-symbols/blob/main/LICENSE.md)

A Blade icon pack for the [Google Material Symbols](https://fonts.google.com/icons) set, designed for easy use in Laravel projects. This package is built on top of the excellent [`blade-ui-kit/blade-icons`](https://github.com/blade-ui-kit/blade-icons) package.

This package provides three primary icon styles: **Outlined**, **Rounded**, and **Sharp**. The **Filled** style is cleverly integrated by appending a `-fill` suffix to any icon name.

## Requirements

- PHP 8.1+
- Laravel 9.0+
- `blade-ui-kit/blade-icons` (will be installed automatically)

## Installation

You can install the package via composer:

```bash
composer require secondnetwork/blade-google-material-symbols
```

The package will automatically register itself.

## Usage

This package provides three component sets, identified by unique prefixes. The `Outlined` set is the default and has the shortest prefix.

| Style     | Prefix    | Example Usage (Outlined)        | Example Usage (Filled)            |
| :-------- | :-------- | :------------------------------ | :-------------------------------- |
| **Outlined**  | `gmso`     | `<x-gmso-home />`           | `<x-gmso-home-fill />`        |
| **Rounded**   | `gmsr`   | `<x-gmsr-home />`         | `<x-gmsr-home-fill />`      |
| **Sharp**     | `gmss`   | `<x-gmss-home />`         | `<x-gmss-home-fill />`      |

### How the "Filled" Style Works

Instead of providing a separate set for filled icons, you can get the filled version of **any** icon in **any** set by simply appending the `-fill` suffix to the icon's name.

**Outlined Example:**
```blade
{{-- Renders the outlined home icon --}}
<x-gmso-home />

{{-- Renders the filled home icon --}}
<x-gmso-home-fill />
```

**Rounded Example:**
```blade
{{-- Renders the rounded settings icon --}}
<x-gmsr-settings />

{{-- Renders the filled rounded settings icon --}}
<x-gmsr-settings-fill />
```

### Styling

You can easily style the icons by passing attributes like `class`, `width`, and `height` directly to the component.

```blade
{{-- Using Tailwind CSS classes for size and color --}}
<x-gmso-check-circle class="size-8 text-green-500" />

{{-- Setting explicit width and height --}}
<x-gmsr-delete-fill class="text-red-600" width="24" height="24" />
```

## Configuration

If you wish to customize the component prefixes, you can publish the configuration file:

```bash
php artisan vendor:publish --provider="secondnetwork\MaterialSymbols\BladeMaterialSymbolsServiceProvider"
```

This will create a `config/blade-google-material-symbols.php` file in your project. You can modify the prefixes for each set as needed.

```php
// config/blade-google-material-symbols.php

return [
    'sets' => [
        'material-outlined' => [
            'path' => __DIR__.'/../resources/svg/material-outlined',
            'prefix' => 'gmso',
        ],
        'material-rounded' => [
            'path' => __DIR__.'/../resources/svg/material-rounded',
            'prefix' => 'gmsr',
        ],
        'material-sharp' => [
            'path' => __DIR__.'/../resources/svg/material-sharp',
            'prefix' => 'gmss',
        ],
    ],

    // You can also define a default class that will be applied to all icons.
    'default_class' => 'inline-block',
];
```

## Maintainers

blade-google-material-symbols is developed and maintained by secondnetwork.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
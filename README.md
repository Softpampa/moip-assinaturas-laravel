# Moip Assinaturas - Laravel

## Installation

In your terminal run **composer require softpampa/moip-assinaturas-laravel.** This will grab the last release.

Or

Edit your composer.json like this:

```json
"require": {
    ....
    "softpampa/moip-assinaturas-php": "dev-master"
    "softpampa/moip-assinaturas-laravel": "dev-master"
}
```

Issue composer update

### Laravel 5

Add to config/app.php service provider array:

```php
    'Softpampa\MoipLaravel\Subscription\SubscriptionServiceProvider',
```

Publish Configuration

```shell
php artisan vendor:publish --provider="Softpampa\MoipLaravel\Subscription\SubscriptionServiceProvider"
```

### Laravel 4

Add to app/config/app.php service provider array:

```php
    'Softpampa\MoipLaravel\Subscription\SubscriptionServiceProviderLaravel4',
```

Publish Configuration

```shell
php artisan config:publish softpampa/moip-assinaturas-laravel
```

### Alias

```php
'MoipPlanos'        => 'Softpampa\MoipLaravel\Subscription\Facades\MoipPlanos',
'MoipFaturas'       => 'Softpampa\MoipLaravel\Subscription\Facades\MoipFaturas',
'MoipPagamentos'    => 'Softpampa\MoipLaravel\Subscription\Facades\MoipPagamentos',
'MoipPreferencias'  => 'Softpampa\MoipLaravel\Subscription\Facades\MoipPreferencias',
'MoipAssinaturas'   => 'Softpampa\MoipLaravel\Subscription\Facades\MoipAssinaturas',
```

## Facades

Facades Available

- [MoipPlanos (Plans)](#)
- [MoipClientes (Customers)](#)
- [MoipAssinaturas (Subscriptions)](#)
- [MoipFaturas (Invoice)](#)
- [MoipPagamentos (Payments)](#)
- [MoipPreferencias (Preferences)](#)

# Author

Anderson Andrade - <contato@andersonandra.de>
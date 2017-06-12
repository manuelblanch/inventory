# :inventory
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/manuelblanch/inventory/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/manuelblanch/inventory/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/manuelblanch/inventory/badges/build.png?b=master)](https://scrutinizer-ci.com/g/manuelblanch/inventory/build-status/master)
[![StyleCI](https://styleci.io/repos/74695252/shield?branch=master)](https://styleci.io/repos/74695252)
[![Build Status](https://scrutinizer-ci.com/g/manuelblanch/inventory/badges/build.png?b=master)](https://scrutinizer-ci.com/g/manuelblanch/inventory/build-status/master)
[![Build Status](https://travis-ci.org/manuelblanch/inventory.svg?branch=master)](https://travis-ci.org/manuelblanch/inventory)

Acces a la web de presentació https://manuelblanch.github.io/presentation_inventory

## Installation

Via Composer

``` bash
$ composer require mblanch/inventory
```

## Installation ##

In a Laravel project execute: 

```bash
composer require mblanch/inventory
```

Add to file **config/app.php** the InventoryServiceProvider:

```
...
 /*
 * Package Service Providers...
 */
 Scool\Inventory\Providers\InventoryServiceProvider::class,
... 
```

And publish files with:

```bash
php artisan vendor:publish --tag=scool_inventory
```

## Database ##

Use:

```bash
php artisan migrate:status
```

To see curriculum migrations and run migrations with:

```bash
php artisan migrate
```

Factories for all models are installed in **database/factories**.

To use Curriculum Seeders modify file **database/seeds/DatabaseSeeder**:

```php
public function run()
{
    $this->call(InventorySeeder::class);
}
```

## User configuration ##

Traits to add to User class:

- HasSpecialities
- 

## Seeders ##

Private data: https://github.com/Institut-Ebre/ebreescool_seeders

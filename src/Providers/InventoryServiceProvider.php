<?php

namespace Scool\Inventory\Providers;

use Illuminate\Support\ServiceProvider;

class InventoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
      $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');  
    }
}

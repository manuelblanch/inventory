<?php

namespace Scool\Inventory\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
use Illuminate\Support\ServiceProvider;
use Acacha\Stateful\Providers\StatatefulServiceProvider;
use Scool\Inventory\ScoolInventory;

/**
 * Class InventoryServiceProvider.
 */
class InventoryServiceProvider extends ServiceProvider
{
    /**
     * Register package services.
     */
    public function register()
    {
        if (!defined('SCOOL_INVENTORY_PATH')) {
            define('SCOOL_INVENTORY_PATH', realpath(__DIR__.'/../../'));
        }
        $this->app->register(NamesServiceProvider::class);
        $this->app->bind(\Scool\Inventory\Repositories\StudyRepository::class, \Scool\Inventory\Repositories\StudyRepositoryEloquent::class);
        $this->app->bind(StatsRepositoryInterface::class,function() {
            return new CacheableStatsRepository(new StatsRepository());
        });
    }
    /**
     * Bootstrap package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineRoutes();
        $this->loadMigrations();
        $this->publishFactories();
        $this->publishConfig();
        $this->publishTests();
    }
    /**
     * Load migrations.
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(SCOOL_INVENTORY_PATH.'/database/migrations');
    }
    /**
     * Publish factories.
     */
    private function publishFactories()
    {
        $this->publishes(
            ScoolInventory::factories(), 'scool_inventory'
        );
    }
    /**
     * Publish config.
     */
    private function publishConfig()
    {
        $this->publishes(
            ScoolInventory::configs(), 'scool_inventory'
        );
        $this->mergeConfigFrom(
            SCOOL_INVENTORY_PATH.'/config/inventory.php', 'scool_inventory'
        );
    }
    private function publishTests()
    {
        $this->publishes(
            [SCOOL_INVENTORY_PATH.'/tests/InventoryTest.php' => 'tests/InventoryTest.php'],
<<<<<<< HEAD
            'scool_inventory'
=======
            'scool_curriculum'
>>>>>>> 80af1b0c8bb867379f66912ed39f99dd26f04530
        );
    }

    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');
            $router->group(['namespace' => 'Scool\Inventory\Http\Controllers'], function () {
            require __DIR__.'/../Http/routes.php';
            });
        }
    }

    private function registerStatefulEloquentServiceProvider ()
    {
        $this->app->register(StatefulServiceProvider::class);
    }
}

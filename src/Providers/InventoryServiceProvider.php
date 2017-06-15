<?php

namespace Scool\Inventory\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
use Acacha\Stateful\Providers\StatefulServiceProvider;
use Illuminate\Support\ServiceProvider;
use Scool\Inventory\ScoolInventory;
use Scool\Inventory\Stats\CacheableStatsRepository;
use Scool\Inventory\Stats\Contracts\StatsRepository as StatsRepositoryInterface;
use Scool\Inventory\Stats\StatsRepository;

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
        include __DIR__.'/routes.php';
        $this->app->make('Scool\Inventory\InventoryController');
        if (!defined('SCOOL_INVENTORY_PATH')) {
            define('SCOOL_INVENTORY_PATH', realpath(__DIR__.'/../../'));
        }
        $this->registerNamesServiceProvider();
        $this->registerStatefulEloquentServiceProvider();
        $this->bindRepositories();
        $this->app->bind(StatsRepositoryInterface::class, function () {
            return new CacheableStatsRepository(new StatsRepository());
        });
    }

    /**
     * Bind repositories.
     */
    protected function bindRepositories()
    {
        $this->app->bind(
            \Scool\Inventory\Repositories\StudyRepository::class,
            \Scool\Inventory\Repositories\StudyRepositoryEloquent::class);
        $this->app->bind(\Scool\Inventory\Repositories\TodoRepository::class, \Scool\Inventory\Repositories\TodoRepositoryEloquent::class);
        $this->app->bind(\Scool\Inventory\Repositories\ShitRepository::class, \Scool\Inventory\Repositories\ShitRepositoryEloquent::class);
        //:end-bindings:
    }

    /**
     * Register acacha/stateful-eloquent Service Provider.
     */
    protected function registerStatefulEloquentServiceProvider()
    {
        $this->app->register(StatefulServiceProvider::class);
    }

    /**
     * Register acacha/names Service Provider.
     */
    protected function registerNamesServiceProvider()
    {
        $this->app->register(NamesServiceProvider::class);
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
        $this->loadViews();
        $this->publishFactories();
        $this->publishConfig();
        $this->publishTests();
    }

    /**
     * Define the curriculum routes.
     */
    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');
            $router->group(['namespace' => 'Scool\Inventory\Http\Controllers'], function () {
                require __DIR__.'/../Http/routes.php';
            });
        }
    }

    /**
     * Load package views.
     */
    private function loadViews()
    {
        $this->loadViewsFrom(SCOOL_INVENTORY_PATH.'/resources/views', 'inventory');
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

    /**
     * Publich tests.
     */
    private function publishTests()
    {
        $this->publishes(
            [SCOOL_INVENTORY_PATH.'/tests/InventoryTest.php' => 'tests/InventoryTest.php'],
            'scool_inventory'
        );
    }
}

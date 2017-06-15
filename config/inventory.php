<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User Model Class
    |--------------------------------------------------------------------------
    |
    | The project class for users.
    |
    */
    'user_class' => App\User::class,
];

providers' => [
 
        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        // ... other providers
        Illuminate\View\ViewServiceProvider::class,
        Scool\Inventory\InventoryServiceProvider::class,
];

 

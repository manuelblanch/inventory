<?php

Route::group(['middleware' => 'auth'], function () {
    Route::resource('inventory', 'InventoryController');
});

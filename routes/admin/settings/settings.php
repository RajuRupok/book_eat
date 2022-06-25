<?php
// Settings
Route::group([
    'prefix' => 'settings', //URL
    'as' => 'settings.', //Route
    'namespace' => 'Settings', // Controller
],
    function(){

        // create manager form and store route
        Route::get('/create_manager', 'SettingsController@createManager')->name('manager.create');
        Route::post('/create_manager', 'SettingsController@storeManager')->name('manager.store');

        // create restaurant category form and store route
        Route::get('/create_restaurent_category', 'SettingsController@createCategory')->name('category.create');
        Route::post('/create_restaurent_category', 'SettingsController@storeCategory')->name('category.store');
        Route::post('/update_restaurent_category', 'SettingsController@updateCategory')->name('category.update');

        Route::get('/change_status/{user_id}/{role}', 'SettingsController@changeStatus')->name('change_status');

    }
);

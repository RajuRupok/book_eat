<?php
// Setting
Route::group([
    'prefix' => 'setting', //URL
    'as' => 'setting.', //Route
    'namespace' => 'Setting', // Controller
],
    function(){
        Route::get('/restaurant', 'SettingController@restaurantIndex')->name('restaurant.index');
        Route::get('/payment', 'SettingController@paymentIndex')->name('payment.index');
    }
);

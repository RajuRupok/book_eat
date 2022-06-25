<?php
// Restaurants
Route::group([
    'prefix' => 'restaurants', //URL
    'as' => 'restaurants.', //Route
    'namespace' => 'Restaurants', // Controller
],
    function(){
        Route::get('/active', 'RestaurantsController@active')->name('active');

        Route::get('/inactive', 'RestaurantsController@inactive')->name('inactive');

        Route::get('/categories', 'RestaurantsController@categories')->name('categories');
    }
);

<?php
// Customers
Route::group([
    'prefix' => 'customers', //URL
    'as' => 'customers.', //Route
    'namespace' => 'Customers', // Controller
],
    function(){
        Route::get('/active', 'CustomersController@active')->name('active');
        Route::get('/inactive', 'CustomersController@inactive')->name('inactive');
    }
);

<?php
// Dashboard
Route::group([
    'prefix' => '', //URL
    'as' => 'dashboard.', //Route
    'namespace' => 'Dashboard', // Controller
],
    function(){
        Route::get('/', 'DashboardController@index')->name('index');
    }
);

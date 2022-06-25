<?php
// Owners
Route::group([
    'prefix' => 'owners', //URL
    'as' => 'owners.', //Route
    'namespace' => 'Owners', // Controller
],
    function(){
        Route::get('/active', 'OwnersController@active')->name('active');

        Route::get('/inactive', 'OwnersController@inactive')->name('inactive');


        Route::get('/change_status', 'OwnersController@changeStatus')->name('change_status');
    }
);

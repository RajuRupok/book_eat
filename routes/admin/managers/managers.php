<?php
// Managers
Route::group([
    'prefix' => 'managers', //URL
    'as' => 'managers.', //Route
    'namespace' => 'Managers', // Controller
],
    function(){
        Route::get('/active', 'ManagersController@active')->name('active');
        Route::get('/inactive', 'ManagersController@inactive')->name('inactive');
    }
);

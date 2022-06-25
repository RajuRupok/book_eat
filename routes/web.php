<?php

Route::group([
        'prefix' => 'auth'
    ], function(){

        Auth::routes();
    });


/*===================================
===========< Admin Routes >==========
===================================*/
Route::group(
    [
        'prefix' => 'auth',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        include_once 'admin/admin.php';
    }
);


/*===================================
===========< Manager Routes >==========
===================================*/
Route::group(
    [
        'prefix' => 'auth',
        'middleware' => ['auth', 'manager'],
    ],
    function () {
        include_once 'manager/manager.php';
    }
);


/*===================================
===========< Owner Routes >==========
===================================*/
Route::group(
    [
        'middleware' => ['auth', 'owner'],
    ],
    function () {
        include_once 'owner/owner.php';
    }
);


/*===================================
===========< Customer Routes >==========
===================================*/
Route::group(
    [
        'middleware' => ['auth', 'customer'],
    ],
    function () {
        include_once 'customer/customer.php';
    }
);


/*===================================
===========< Guest Routes >==========
===================================*/
Route::group(
    [
        // 'middleware' => ['guest'],
    ],
    function () {
        include_once 'guest/guest.php';


        Route::get('/','HomeController@index')->name('homepage');
        Route::post('/loginwithuser', 'Auth\LoginController@loginWithEmailOrUsername')->name('loginWithUser');
    }
);

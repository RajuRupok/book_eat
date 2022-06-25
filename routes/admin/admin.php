<?php

// Admin Routes
Route::group([
    'prefix' => 'admin', // URL
    'as' => 'admin.', // Route
    'namespace' => 'Admin', // Controller
],
    function(){

        /* ==================================
        ============< Dashboard >============
        ===================================*/
        // Dashboard
        include_once 'dashboard/dashboard.php';

        /* ==================================
        ============< settings >============
        ===================================*/
        // settings
        include_once 'settings/settings.php';

        /* ==================================
        ============< owners >============
        ===================================*/
        // owners
        include_once 'owners/owners.php';

        /* ==================================
        ============<  restaurants >============
        ===================================*/
        //  restaurants
        include_once 'restaurants/restaurants.php';

        /* ==================================
        ============<  customers >============
        ===================================*/
        //  customers
        include_once 'customers/customers.php';

        /* ==================================
        ============<   managers >============
        ===================================*/
        //   managers
        include_once 'managers/managers.php';
    }
);

<?php

// Customer Routes
Route::group([
    'prefix' => 'customer', // URL
    'as' => 'customer.', // Route
    'namespace' => 'Customer', // Controller
],
    function(){
        /* ==================================
        ============< Dashboard >============
        ===================================*/
        // Dashboard
        include_once 'dashboard/dashboard.php';
    }
);

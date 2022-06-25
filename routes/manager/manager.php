<?php

// Manager Routes
Route::group([
    'prefix' => 'manager', // URL
    'as' => 'manager.', // Route
    'namespace' => 'Manager', // Controller
],
    function(){
        /* ==================================
        ============< Dashboard >============
        ===================================*/
        // Dashboard
        include_once 'dashboard/dashboard.php';
    }
);

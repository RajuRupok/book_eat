<?php

// Owner Routes
Route::group([
    'prefix' => 'owner', // URL
    'as' => 'owner.', // Route
    'namespace' => 'Owner', // Controller
],
    function(){
        /* ==================================
        ============< Dashboard >============
        ===================================*/
        // Dashboard
        include_once 'dashboard/dashboard.php';


        /* ==================================
        ============< Bookings >============
        ===================================*/
        // Bookings
        include_once 'booking/booking.php';


        /* ==================================
        ============< Reviews >============
        ===================================*/
        // Reviews
        include_once 'review/review.php';


        /* ==================================
        ============< Offers >============
        ===================================*/
        // Offers
        include_once 'offer/offer.php';


        /* ==================================
        ============< Settings >============
        ===================================*/
        // Settings
        include_once 'setting/setting.php';
    }
);

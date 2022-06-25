<?php

// guest Routes
Route::group([
    'prefix' => '', // URL
    'as' => 'guest.', // Route
    'namespace' => '', // Controller
],
    function(){

        include_once 'social_login/social_login.php';

        Route::get('/offer/all_offer', 'OfferController@allOffer')->name('offer.index');

    }
);

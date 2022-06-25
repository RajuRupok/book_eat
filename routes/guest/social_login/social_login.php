<?php

// guest Routes
Route::group([
    'prefix' => 'social_login', // URL
    'as' => 'social_login.', // Route
    'namespace' => 'SocialLogin', // Controller
],
    function(){

        // Route::get('/', 'FacebookController@allOffer')-> name('facebook');

    }
);

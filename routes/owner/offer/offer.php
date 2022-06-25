<?php
// Offer
Route::group([
    'prefix' => 'offer', //URL
    'as' => 'offer.', //Route
    'namespace' => 'Offer', // Controller
],
    function(){
        Route::get('/active', 'OfferController@activeIndex')->name('active.index');
        Route::get('/inactive', 'OfferController@inactiveIndex')->name('inactive.index');
        Route::get('/old', 'OfferController@oldIndex')->name('old.index');
        Route::get('/new_offer', 'OfferController@newOffer')->name('create');
    }
);

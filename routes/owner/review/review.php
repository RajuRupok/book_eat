<?php
// Review
Route::group([
    'prefix' => 'review', //URL
    'as' => 'review.', //Route
    'namespace' => 'Review', // Controller
],
    function(){
        Route::get('/all_review', 'ReviewController@allIndex')->name('all.index');
        Route::get('/food', 'ReviewController@foodIndex')->name('food.index');
        Route::get('/service', 'ReviewController@serviceIndex')->name('service.index');
        Route::get('/ambience', 'ReviewController@ambienceIndex')->name('ambience.index');
        Route::get('/value', 'ReviewController@valueIndex')->name('value.index');
    }
);

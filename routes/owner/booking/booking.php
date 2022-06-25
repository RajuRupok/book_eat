<?php
// Booking
Route::group([
    'prefix' => 'booking', //URL
    'as' => 'booking.', //Route
    'namespace' => 'Booking', // Controller
],
    function(){
        Route::get('/pending', 'BookingController@pendingIndex')->name('pending.index');
        Route::get('/ongoing', 'BookingController@ongoingIndex')->name('ongoing.index');
        Route::get('/completed', 'BookingController@completedIndex')->name('completed.index');
        Route::get('/canceled', 'BookingController@canceledIndex')->name('canceled.index');
    }
);

<?php

namespace App\Http\Controllers\Owner\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Constructor
     *
     * @return Middleware
     */
    public function __construct()
    {
        $this->middleware(['auth', 'owner']);
    }

    /**
     * pendingIndex
     *
     * @return pendingIndex
     */
    public function pendingIndex()
    {
        return view('owner.booking.pending');
    }

    /**
     * ongoingIndex
     *
     * @return ongoingIndex
     */
    public function ongoingIndex()
    {
        return view('owner.booking.ongoing');
    }

    /**
     * completedIndex
     *
     * @return completedIndex
     */
    public function completedIndex()
    {
        return view('owner.booking.completed');
    }

    /**
     * canceledIndex
     *
     * @return canceledIndex
     */
    public function canceledIndex()
    {
        return view('owner.booking.canceled');
    }
}

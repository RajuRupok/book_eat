<?php

namespace App\Http\Controllers\Owner\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
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
     * activeIndex
     *
     * @return activeIndex
     */
    public function activeIndex()
    {
        return view('owner.offer.active');
    }

    /**
     * inactiveIndex
     *
     * @return inactiveIndex
     */
    public function inactiveIndex()
    {
        return view('owner.offer.inactive');
    }

    /**
     * oldIndex
     *
     * @return oldIndex
     */
    public function oldIndex()
    {
        return view('owner.offer.old');
    }

    /**
     * newOffer
     *
     * @return newOffer
     */
    public function newOffer()
    {
        return view('owner.offer.create');
    }
}

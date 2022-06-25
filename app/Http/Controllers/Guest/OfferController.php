<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Offer Index Page
     * @return all_offer_index_page
     */
    public function allOffer()
    {
        return view('guest.offer.index');
    }
}

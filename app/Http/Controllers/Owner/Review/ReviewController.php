<?php

namespace App\Http\Controllers\Owner\Review;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
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
     * allIndex
     *
     * @return allIndex
     */
    public function allIndex()
    {
        return view('owner.review.all');
    }

    /**
     * foodIndex
     *
     * @return foodIndex
     */
    public function foodIndex()
    {
        return view('owner.review.food');
    }

    /**
     * serviceIndex
     *
     * @return serviceIndex
     */
    public function serviceIndex()
    {
        return view('owner.review.service');
    }

    /**
     * ambienceIndex
     *
     * @return ambienceIndex
     */
    public function ambienceIndex()
    {
        return view('owner.review.ambience');
    }

    /**
     * valueIndex
     *
     * @return valueIndex
     */
    public function valueIndex()
    {
        return view('owner.review.value');
    }
}

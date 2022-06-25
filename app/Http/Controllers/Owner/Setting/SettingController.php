<?php

namespace App\Http\Controllers\Owner\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
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
     * restaurantIndex
     *
     * @return restaurantIndex
     */
    public function restaurantIndex()
    {
        return view('owner.setting.restaurant');
    }

    /**
     * paymentIndex
     *
     * @return paymentIndex
     */
    public function paymentIndex()
    {
        return view('owner.setting.payment');
    }
}

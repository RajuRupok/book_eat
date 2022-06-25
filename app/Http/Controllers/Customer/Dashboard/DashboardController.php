<?php

namespace App\Http\Controllers\Customer\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Constructor
     *
     * @return Middleware
     */
    public function __construct()
    {
        $this->middleware(['auth', 'customer']);
    }

    /**
     * Customer Dashboard Index
     *
     * @return CustomerDashboard
     */
    public function index()
    {
        return view('customer.dashboard.index');
    }
}

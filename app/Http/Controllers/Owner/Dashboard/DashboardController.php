<?php

namespace App\Http\Controllers\Owner\Dashboard;

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
        $this->middleware(['auth', 'owner']);
    }

    /**
     * Owner Dashboard Index
     *
     * @return OwnerDashboard
     */
    public function index()
    {
        return view('owner.dashboard.index');
    }
}

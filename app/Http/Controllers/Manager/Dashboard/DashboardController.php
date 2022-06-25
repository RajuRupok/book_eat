<?php

namespace App\Http\Controllers\Manager\Dashboard;

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
        $this->middleware(['auth', 'manager']);
    }

    /**
     * Manager Dashboard Index
     *
     * @return ManagerDashboard
     */
    public function index()
    {
        return view('manager.dashboard.index');
    }
}

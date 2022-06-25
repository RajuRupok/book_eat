<?php

namespace App\Http\Controllers\Admin\Dashboard;

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
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Admin Dashboard Index
     *
     * @return AdminDashboard
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class CustomersController extends Controller
{
    /**
     * for showing active manager
     * @return customers list active
     */
    public function active()
    {
        $customers = User::where('role_id', 4)->where('status', 1)->get();
        return  view('admin.customers.active', compact(['customers']));
    }

    /**
     * for showing active manager
     * @return customers list inactive
     */
    public function inactive()
    {
        $customers = User::where('role_id', 4)->where('status', 0)->get();
        return  view('admin.customers.inactive', compact(['customers']));
    }
}

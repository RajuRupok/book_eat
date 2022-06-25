<?php

namespace App\Http\Controllers\Admin\Managers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class ManagersController extends Controller
{

    /**
     * for showing active manager
     * @return Managers list active
     */
    public function active()
    {
        $managers = User::where('role_id', 2)->where('status', 1)->get();
        return  view('admin.managers.active', compact(['managers']));
    }

    /**
     * for showing active manager
     * @return Managers list inactive
     */
    public function inactive()
    {
        $managers = User::where('role_id', 2)->where('status', 0)->get();
        return  view('admin.managers.inactive', compact(['managers']));
    }
}

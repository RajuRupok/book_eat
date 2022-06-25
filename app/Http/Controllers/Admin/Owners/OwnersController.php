<?php

namespace App\Http\Controllers\Admin\Owners;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class OwnersController extends Controller
{
    /**
     * for showing active manager
     * @return Owners lists active
     */
    public function active()
    {
        $owners = User::with(['restaurants'])->where(['role_id' => 3, 'status' => 1])->get();
        return  view('admin.owners.active', compact(['owners']));
    }

    /**
     * for showing active manager
     * @return Owners lists
     */
    public function inactive()
    {
        $owners = User::with(['restaurants'])->where(['role_id' => 3, 'status' => 0])->get();
        return  view('admin.owners.inactive', compact(['owners']));
    }
}

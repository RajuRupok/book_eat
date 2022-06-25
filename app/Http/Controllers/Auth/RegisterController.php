<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard.index');
        }
        elseif (Auth::check() && Auth::user()->role->id == 2) {
            $this->redirectTo = route('manager.dashboard.index');
        }
        elseif (Auth::check() && Auth::user()->role->id == 3) {
            $this->redirectTo = route('owner.dashboard.index');
        }
        elseif (Auth::check() && Auth::user()->role->id == 4) {
            $this->redirectTo = route('customer.dashboard.index');
        }

        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $role_id = decrypt($data['role_id']);
        $this->changePath($role_id);
        return User::create([
            'role_id' => $role_id,
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function changePath($role_id){
        if ($role_id == 1) {
            $this->redirectTo = route('admin.dashboard.index');
        }
        elseif ($role_id == 2) {
            $this->redirectTo = route('manager.dashboard.index');
        }
        elseif ($role_id == 3) {
            $this->redirectTo = route('owner.dashboard.index');
        }
        elseif ($role_id == 4) {
            $this->redirectTo = route('customer.dashboard.index');
        }
    }
}

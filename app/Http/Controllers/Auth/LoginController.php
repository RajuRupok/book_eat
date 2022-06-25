<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard.index');
        } elseif (Auth::check() && Auth::user()->role->id == 2) {
            $this->redirectTo = route('manager.dashboard.index');
        } elseif (Auth::check() && Auth::user()->role->id == 3) {
            $this->redirectTo = route('owner.dashboard.index');
        } elseif (Auth::check() && Auth::user()->role->id == 4){
            $this->redirectTo = route('customer.dashboard.index');
        }

        $this->middleware('guest')->except('logout');
    }


    /**
     * After login where to go
     */
    public function redirectAuth()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $redirectTo = 'admin.dashboard.index';
        } elseif (Auth::check() && Auth::user()->role->id == 2) {
            $redirectTo = 'manager.dashboard.index';
        } elseif (Auth::check() && Auth::user()->role->id == 3) {
            $redirectTo = 'owner.dashboard.index';
        } elseif (Auth::check() && Auth::user()->role->id == 4){
            $redirectTo = 'customer.dashboard.index';
        }

        $this->middleware('guest')->except('logout');
        return $redirectTo;
    }


    /**
     * Login with username or email
     */
    public function loginWithEmailOrUsername(Request $request){

        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required | min:8',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ], $request->remember)) {
                return redirect()->route($this->redirectAuth());
                // return "logged in email";
        }
        elseif(Auth::attempt([
            'username' => $request->email,
            'password' => $request->password,
            'status' => 1
        ], $request->remember)){
            return redirect()->route($this->redirectAuth());
            // return "logged in by username";
        }
        else {
            toast('Email or Password does not match !','error')->autoclose(5000);
            return redirect()->back();
            // return "not logged in";
        }
    }
}

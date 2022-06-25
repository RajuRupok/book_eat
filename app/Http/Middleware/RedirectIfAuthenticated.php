<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 1) {
            return redirect()->route('admin.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 2) {
            return redirect()->route('manager.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 3) {
            return redirect()->route('owner.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 4){
            return redirect()->route('customer.dashboard.index');
        }

        return $next($request);
    }
}

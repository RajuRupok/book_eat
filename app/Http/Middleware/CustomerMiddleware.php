<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role->id == 4) {
            return $next($request);
        } elseif(Auth::check() && Auth::user()->role->id != 4){
            return redirect()->route('login');
        } else {
            return redirect()->route('homepage');
        }
    }
}

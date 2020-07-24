<?php

namespace App\Http\Middleware;

use Closure;
use Auth;           //alert

class Admin
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
        if(!Auth::guard('admin')->check()){
            return redirect('/admin');
        }
        return $next($request);
    }
}

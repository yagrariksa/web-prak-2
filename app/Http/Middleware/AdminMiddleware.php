<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
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
        // dump('adminMiddleware');
        // dd(Session::get('admin'));
        if (Session::has('admin')) {
            if(Session::get('admin.login')) {
                return $next($request);
            }
        }

        return redirect()->route('admin.login');
    }
}

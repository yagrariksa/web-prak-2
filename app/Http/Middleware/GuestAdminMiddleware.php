<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class GuestAdminMiddleware
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
        // dump('GUEST adminMiddleware');
        // dd(Session::get('admin'));
        if (Session::has('admin')) {
            if (Session::get('admin.login')) {
                return redirect()->route('admin.home');
            }
        }

        return $next($request);
    }
}

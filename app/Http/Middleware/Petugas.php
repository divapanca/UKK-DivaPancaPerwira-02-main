<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class Petugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        if (Session::get('level')=="petugas") {
            return $next($request);

            dd($next);
        }else{
            return redirect('/admin');
        }

    }
}

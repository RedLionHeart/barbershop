<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotAAdmin
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
//        dd($request->user());
        if (Auth::check()){
            if (!Auth()->user()->isATeamAdmin()){

                return redirect('/shop');
            }
        }

        return $next($request);
    }
}

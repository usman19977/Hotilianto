<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){

            if(Auth::user()->roles[0]->name == 'manager' ){
                return $next($request);
            }

            else{

                return redirect()->route('dashboard');
            }


        }else {
            return redirect()->route('login');
        }
    }
}

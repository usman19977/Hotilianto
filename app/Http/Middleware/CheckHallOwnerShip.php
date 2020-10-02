<?php

namespace App\Http\Middleware;

use App\Models\hall;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckHallOwnerShip
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
        if(Auth::user()->roles[0]->name == 'administrator'){
            return $next($request);
        }
        $managerid = Auth::user()->id;
        $hallid = $request->route('hall');

      $hall =   hall::firstorfail()->where(['id'=> $hallid , 'user_id' =>$managerid])->get();

       if(count($hall) > 0){
           return $next($request);
       }
    return redirect()->route('home');

    }
}

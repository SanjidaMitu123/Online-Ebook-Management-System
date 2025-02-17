<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        if(auth()->user()->role=='admin' or auth()->user()->role=='author')
            {

                      return $next($request);
             }
             return redirect()->back()->withErrors('you are not admin.');
    }




    
}

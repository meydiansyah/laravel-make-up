<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if(in_array($request->user()->level,$levels)){
            return $next($request);
        }
        return redirect('/home')->with('error',"You don't have admin access.");
    }
}

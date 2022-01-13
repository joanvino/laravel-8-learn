<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
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
        // if(!auth()->check() || !auth()->user()->is_ketua) {
        //     abort(403);
        // } 

        if(!auth()->check() || !auth()->user()->is_ketua) {
            abort(403);
        } 
        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

        public function handle(Request $request, Closure $next, $userType): Response
    {
        if(auth()->user()->type == $userType){
            return $next($request);
        }
        return response()->json(['You do not have permission to access for this page.']);

        // if (auth()->check() && auth()->user()->type == $userType) {
        //     return $next($request);
        // }
        // return redirect()->route('login')->with('error', 'You do not have permission to access this page.');

        /* return response()->view('errors.check-permission'); */
    }

}
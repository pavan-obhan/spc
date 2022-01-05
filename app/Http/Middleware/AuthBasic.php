<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param \Illuminate\Http\Request $request
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::onceBasic()) {
            return response()->json(['message'=>'Authorization failure'],401);
        }
        return $next($request);
    }
}

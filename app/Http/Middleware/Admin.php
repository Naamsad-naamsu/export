<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;

class Admin
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
        if ($request->user() && $request->user()->type != 'ADMIN') {
            return new Response(view('errors.404')->with('role','ADMIN'));
        }
        return $next($request);
    }
}

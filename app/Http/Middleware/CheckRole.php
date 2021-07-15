<?php

namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() == null || $request->user()->role !== 'ADMIN') {
          return redirect(RouteServiceProvider::HOME);
        }
        return $next($request);
    }

}
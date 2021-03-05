<?php

namespace App\Http\Middleware;

use Closure;

class AdminRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole('ADMIN')) {
          redirect(RouteServiceProvider::HOME);
        }
        return $next($request);
    }

}
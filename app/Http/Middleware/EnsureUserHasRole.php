<?php

namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;

use Closure;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if (! $request->user()->hasRole($role)) {
            redirect(RouteServiceProvider::HOME);
          }
        return $next($request);
    }
}

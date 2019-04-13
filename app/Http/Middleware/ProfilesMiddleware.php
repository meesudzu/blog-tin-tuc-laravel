<?php

namespace App\Http\Middleware;

use Closure;

class ProfilesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::check()) {
            return redirect('profiles');
        } else {
            return $next($request);
        }
    }
}

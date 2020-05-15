<?php

namespace App\Http\Middleware;

use Closure;

class CustomLoginAuthentication
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
        if(!session()->has('session_data')){
            return redirect('/users/set_session_get');
        }
        return $next($request);
    }
}

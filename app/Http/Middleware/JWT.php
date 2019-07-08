<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;


class JWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // pls note that when you create a middleware you have to register it in the app/http/kernel under protected $routeMiddleware
    public function handle($request, Closure $next)
    {
        JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
}

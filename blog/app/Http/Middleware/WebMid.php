<?php

namespace App\Http\Middleware;

use Closure;

class WebMid
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
        //echo "Web Middleware pass <br>";
        return $next($request);
    }
}

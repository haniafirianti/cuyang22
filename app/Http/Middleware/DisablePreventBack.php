<?php

namespace App\Http\Middleware;

use Closure;

class DisablePreventBack
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
        $response = $next($request);
        
        return $response->header('Cache-Control','nocache, no-store, must-revalidate')
                        ->header('Pragma','no-cache')
                        ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }

}

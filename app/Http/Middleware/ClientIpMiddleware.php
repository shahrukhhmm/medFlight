<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientIpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $clientIp = $request->header('X-Forwarded-For') ?? $_SERVER['REMOTE_ADDR'];
        $request->attributes->add(['clientIp' => $clientIp]);
    
        return $next($request);
    }
}
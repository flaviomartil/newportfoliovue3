<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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
        $corsConfig = config('cors');

        $headers = [
            'Access-Control-Allow-Origin' => $corsConfig['allowed_origins'],
            'Access-Control-Allow-Methods' => $corsConfig['allowed_methods'],
            'Access-Control-Allow-Headers' => $corsConfig['allowed_headers']
        ];

        if ($request->getMethod() == "OPTIONS") {
            return response()->json('OK', 200, $headers);
        }

        return $next($request);
    }
}

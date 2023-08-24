<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthBearer
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = session('access_token');
        if (!$token) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class AuthBearer
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = session('access_token');
        if (!$token) {
            $url = url()->current();
            if (Str::contains($url, 'personal')) {
                return redirect()->route('personal.login');
            } else {
                return redirect('login');
            }
        }
        return $next($request);
    }
}

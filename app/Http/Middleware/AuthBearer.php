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
            $previousUrl = url()->previous();
            if (Str::contains($previousUrl, 'personal')) {
                return redirect()->route('personal-login');
            } else {
                return redirect('login');
            }
        }
        return $next($request);
    }
}

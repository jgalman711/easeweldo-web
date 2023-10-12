<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthRedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('access_token')) {
            $url = url()->current();
            if (Str::contains($url, 'personal')) {
                return redirect()->route('personal.dashboard');
            } else {
                return redirect('dashboard');
            }
            return redirect('dashboard');
        }
        return $next($request);
    }
}

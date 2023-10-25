<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        return view('pages.personal.auth.login');
    }

    public function store(Request $request)
    {
        try {
            $this->authService->login($request, 'personal/login');
            $next = redirect()->route('dashboard');
        } catch (Exception $e) {
            $next = redirect()->back()->withErrors($e->getMessage());
        }
        return $next;
    }

    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('personal.login');
    }
}

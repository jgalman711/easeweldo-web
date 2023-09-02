<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function index()
    {
        session()->forget('access_token');
        session()->forget('company_slug');
        return redirect('login');
    }
}

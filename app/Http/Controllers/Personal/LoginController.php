<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\LoginController as BaseLoginController;

class LoginController extends BaseLoginController
{
    protected $loginUrl = 'personal/login';

    public function index()
    {
        return view('pages.personal.auth.login');
    }

    public function logout()
    {
        $this->httpService->post('logout');
        session()->forget(['access_token', 'company', 'employee']);
        return redirect()->route('personal.login');
    }
}

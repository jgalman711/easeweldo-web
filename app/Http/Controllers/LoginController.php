<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $loginUrl = 'login';

    public function index()
    {
        return view('pages.business.auth.login');
    }

    public function store(Request $request)
    {
        try {
            $response = $this->httpService->post($this->loginUrl, $request->all());
            if ($response->isSuccess()) {
                $data = $response->getData();
                session([
                    'access_token' => $data['token'] ?? null,
                    'company' => $data['user']['companies'][0] ?? null,
                    'employee' => $data['user']['employee'] ?? null
                ]);
                $next = redirect()->route('dashboard');
            } elseif ($response->isFailed()) {
                $next = redirect()->back()->withErrors($response->getErrors());
            } else {
                $next = redirect()->back()->withErrors('Login failed.');
            }
        } catch (Exception $e) {
            $next = redirect()->back()->withErrors($e->getMessage());
        }
        return $next;
    }

    public function logout()
    {
        $this->httpService->post('logout');
        session()->forget(['access_token', 'company', 'employee']);
        return redirect()->route('personal.login');
    }
}

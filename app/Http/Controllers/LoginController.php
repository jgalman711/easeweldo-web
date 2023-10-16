<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.business.auth.login');
    }

    public function store(Request $request)
    {
        try {
            $response = $this->httpService->post('login', $request->all());
            if ($response->isSuccess()) {
                $data = $response->getData();
                $token = $data['token'];
                $company = $data['user']['companies'][0] ?? null;
                if ($company) {
                    session(['company_slug' => $company['slug']]);
                }
                session(['access_token' => $token]);
                $request->session()->put('data', $data);
                $next = redirect()->route('dashboard');
            } elseif ($response->isFailed()) {
                $next = redirect()->back()->withErrors($response->getErrors());
            } else {
                $next = redirect()->back()->withErrors(['Login failed.']);
            }
        } catch (Exception) {
            $next = redirect()->back()->withErrors(['Login failed.']);
        }
        return $next;
    }
}

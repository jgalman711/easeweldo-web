<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.personal.auth.login');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $response = $this->httpService->post('personal/login', $data);

        if ($response->isFailed()) {
            return redirect()->back()->withInput()->withErrors($response->getErrors());
        }

        try {
            $data = $response->getData();
            if ($response->isSuccess()) {
                $token = $data['token'];
                $company = $data['user']['companies'][0] ?? null;
                if ($company) {
                    session(['company_slug' => $company['slug']]);
                }
                session(['access_token' => $token]);
                $request->session()->put('data', $data);
                return redirect()->route('personal.dashboard');
            }
        } catch (Exception) {
            return redirect()->back()->withInput()->withErrors(['Login failed.']);
        }
        return redirect()->back()->withInput()->withErrors(['Login failed.']);

    }

    public function logout(Request $request)
    {
        $this->httpService->post('logout');
        $request->session()->forget(['company_slug', 'access_token', 'data']);
        return redirect()->route('personal.login');
    }
}

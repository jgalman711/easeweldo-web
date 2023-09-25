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
        $response = $this->httpService->post('login', $request->all());

        if ($response->isFailed()) {
            return redirect()->back()->withErrors($response->getErrors());
        }

        try {
            $data = $response->getData();
            $token = $data['token'];
            $company = $data['user']['companies'][0] ?? null;
            if ($company) {
                session(['company_slug' => $company['slug']]);
                $response = $this->httpService->get("companies/{$company['slug']}/subscriptions");
                if ($response->isDataEmpty()) {
                    return redirect('subscriptions?subscription_id=2');
                }
            }
            session(['access_token' => $token]);
            return view('under-construction')->with('message', "Welcome back!");
        } catch (Exception) {
            return redirect()->back()->withErrors(['Login failed.']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.business.auth.register');
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('register', $request->all());

        if ($response->isFailed()) {
            return redirect()->back()->withErrors($response->getErrors())->withInput();
        }

        if ($response->isSuccess()) {
            $data = $response->getData();
            $token = $data['token'];
            $company = $data['company'];
            session(['access_token' => $token]);
            session(['company_slug' => $company['slug']]);
            $response = $this->httpService->get("companies/{$company['slug']}/subscriptions");
            if ($response->isDataEmpty()) {
                return redirect('subscriptions?subscription_id=2');
            }
            return view('trial-subscribed');
        }
        return redirect()->back()->withErrors(['Registration failed.'])->withInput();
    }
}

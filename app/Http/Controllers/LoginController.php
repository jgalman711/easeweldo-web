<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('login', $request->all());

        if (isset($response['success']) && !$response['success']) {
            $errorMessage = 'Email address or password is incorrect.';
            return redirect()->back()->withErrors([$errorMessage]);
        }

        if (isset($response['success']) && $response['success'] && isset($response['data']['token'])) {
            $token = $response['data']['token'];
            session(['access_token' => $token]);
            try {
                $company = $response['data']['user']['companies'][0];
                session(['company_slug' => $company['slug']]);
            } catch (Exception) {
                Session::forget('company_slug');
            }
            return view('under-construction')->with('message', "Welcome back!");
            // return redirect(env('EASEWELDO_PORTAL_URL'))->with('token', $response['data']['token']);
        }

        return redirect()->back()->withErrors(['Login failed.']);
    }
}

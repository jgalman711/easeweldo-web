<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email_address' => 'required|email',
            'password' => 'required',
        ]);
        
        $response = $this->httpService->post('login', $request->all());

        if (isset($response['success']) && !$response['success']) {
            $errorMessage = 'Email address or password is incorrect.';
            return redirect()->back()->withErrors([$errorMessage]);
        }

        if (isset($response['success']) && $response['success'] && isset($response['data']['token'])) {
            return view('under-construction');
            // return redirect(env('EASEWELDO_PORTAL_URL'))->with('token', $response['data']['token']);
        }

        return redirect()->back()->withErrors(['Login failed.']);
    }
}

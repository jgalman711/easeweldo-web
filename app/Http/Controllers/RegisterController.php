<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('register', $request->all());

        if (isset($response['success']) && !$response['success']) {
            return redirect()->back()->withErrors($response['errors'])->withInput();
        }

        if (isset($response['success']) && $response['success'] && isset($response['data']['token'])) {
            return view('under-construction')->with('message', 'Thank you for your registration!');
            // return redirect(env('EASEWELDO_PORTAL_URL'))->with('token', $response['data']['token']);
        }

        return redirect()->back()->withErrors(['Registration failed.']);
    }
}

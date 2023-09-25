<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('pages.business.auth.forgotpassword');
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('forgot-password', $request->all());
        if ($response->isSuccess()) {
            return redirect()->back()->with('status', $response->getMessage());
        } else {
            return redirect()->back()->withErrors($response->getErrors())->withInput();
        }
    }
}

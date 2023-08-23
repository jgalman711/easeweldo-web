<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgotpassword');
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('forgot-password', $request->all());
        if (isset($response['success']) && !$response['success']) {
            $errorMessage = $response['errors'] ?? [$response['message']];
            return redirect()->back()->withErrors($errorMessage)->withInput();
        }

        if (isset($response['success']) && $response['success'] && isset($response['data']['token'])) {
            return redirect()->back()->with('status', 'Password reset email has been sent. Please check your email.');
        }

        return redirect()->back()->withErrors(['Unable to send reset password link.'])->withInput();
    }
}

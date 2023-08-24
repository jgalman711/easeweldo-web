<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function index(Request $request)
    {
        $response = $this->httpService->get('reset-password', $request->all());

        if (isset($response['success']) && !$response['success']) {
            $errorMessage = $response['errors'] ?? [$response['message']];
            return redirect('login')->withErrors($errorMessage)->withInput();
        }

        return view('resetpassword', [
            'token' => $request->token,
            'email_address' => $request->email_address
        ]);
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('reset-password', $request->all());

        if (isset($response['success']) && !$response['success']) {
            $errorMessage = $response['errors'] ?? [$response['message']];
            return redirect()->back()->withErrors($errorMessage)->withInput();
        }

        if (isset($response['success']) && $response['success'] && isset($response['message'])) {
            return redirect('login')->with('status', $response['message']);
        }

        return redirect()->back()->withErrors(['Reset password failed.']);
    }
}

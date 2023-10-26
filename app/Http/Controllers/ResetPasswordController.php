<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function index(Request $request)
    {
        $response = $this->httpService->get('reset-password', $request->all());

        if ($response->isSuccess()) {
            $type = $request->has('type') ? $request->type : 'business';
            return view('pages.business.auth.resetpassword', [
                'email_address' => $request->email_address,
                'token' => $request->token,
                'type' => $type
            ]);
        }
        return redirect('login')->withErrors($response->getErrors())->withInput();
    }

    public function store(Request $request)
    {
        $response = $this->httpService->post('reset-password', $request->all());

        if ($response->isSuccess()) {
            return redirect('login')->with('status', $response->getMessage());
        } elseif ($response->isFailed()) {
            return redirect()->back()->withErrors($response->getErrors())->withInput();
        }
        return redirect()->back()->withErrors(['Reset password failed.']);
    }
}

<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function index()
    {
        parent::init();
        $url = $this->baseUrl;
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $user = $response->getData();
        }

        return view('pages.personal.profile.index', [
            'user' => $user ?? null,
            'employee' => $this->employee,
        ]);
    }

    public function edit()
    {
        parent::init();
        $url = $this->baseUrl;
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $user = $response->getData();
        }

        return view('pages.personal.profile.edit', [
            'user' => $user ?? null
        ]);
    }

    public function update(Request $request)
    {
        parent::init();
        $url = $this->baseUrl . '/change-password';
        $response = $this->httpService->patch($url, $request->all());

        if ($response->isFailed()) {
            return redirect()->back()->withInput()->withErrors($response->getErrors());
        }

        if ($response->isSuccess()) {
            return redirect()->back()->with('success', 'Password changed successfully.');
        }
        return redirect()->back()->withInput();
    }
}

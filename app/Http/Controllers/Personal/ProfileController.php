<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function index(Request $request)
    {
        parent::init($request);
        $url = $this->baseUrl;
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $user = $response->getData();
        }

        return view('pages.personal.profile', [
            'user' => $user ?? null
        ]);
    }
}

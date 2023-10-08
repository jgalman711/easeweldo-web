<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class QrController extends BaseController
{
    public function create(Request $request)
    {
        parent::init($request);
        $url = $this->baseUrl . "/qrcode";
        $response = $this->httpService->get($url);
        return view('pages.personal.qr', ['qr' => $response->getBody()]);
    }

    public function index(Request $request)
    {
        parent::init($request);
        $geolocation = '';
        $params = "?employee_id={$this->employee['id']}&geo={$geolocation}";
        return view('pages.personal.qr-scanner', [
            'token' => session('access_token'),
            'clock_in_url' => config('app.api_endpoint') . $this->baseUrl . "/qrcode?",
            'params' => $params
        ]);
    }
}

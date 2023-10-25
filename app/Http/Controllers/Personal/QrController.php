<?php

namespace App\Http\Controllers\Personal;

class QrController extends BaseController
{
    public function create()
    {
        parent::init();
        $url = $this->baseUrl . "/qrcode";
        $response = $this->httpService->get($url);
        return view('pages.personal.qr', ['qr' => $response->getBody()]);
    }

    public function index()
    {
        parent::init();
        $geolocation = '';
        $params = "?employee_id={$this->employee['id']}&geo={$geolocation}";
        return view('pages.personal.qr-scanner', [
            'token' => session('access_token'),
            'clock_in_url' => config('app.api_endpoint') . $this->baseUrl . "/qrcode?",
            'params' => $params
        ]);
    }
}

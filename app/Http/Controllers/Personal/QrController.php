<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class QrController extends BaseController
{
    public function index()
    {
        return view('pages.personal.qr-scanner', [
            'clock_in_url' => config('app.api_endpoint') . $this->baseUrl . "/clock"
        ]);
    }
}

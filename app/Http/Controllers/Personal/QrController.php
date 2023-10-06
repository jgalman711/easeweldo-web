<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class QrController extends BaseController
{
    public function index(Request $request)
    {
        parent::init($request);
        return view('pages.personal.qr-scanner', [
            'es_api' => config('app.api_endpoint')
        ]);
    }
}

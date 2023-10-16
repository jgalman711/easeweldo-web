<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Personal\BaseController;
use Illuminate\Http\Request;

class CompanyController extends BaseController
{
    public function edit(Request $request)
    {
        parent::init($request);
        $response = $this->httpService->get("companies/" . $this->company['slug']);
        if ($response->isSuccess()) {
            $this->company = $response->getData();
        }

        $endpoint = config('app.api_endpoint') . "companies/" . $this->company['slug'] . '?_method=PUT';
        return view('pages.business.company-registration', [
            'token' => session('access_token'),
            'company' => $this->company,
            'update_api_endpoint' => $endpoint
        ]);
    }

    public function complete()
    {
        return view('thank-you');
    }
}

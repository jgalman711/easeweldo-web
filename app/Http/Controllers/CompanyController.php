<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function edit()
    {
        $companySlug = session('company_slug');
        $response = $this->httpService->get("companies/{$companySlug}");
        if ($response->isSuccess()) {
            $company = $response->getData();
            $endpoint = config('app.api_endpoint') . "companies/{$companySlug}?_method=PUT";
            return view('pages.business.company-registration', [
                'token' => session('access_token'),
                'company' => optional($company),
                'update_api_endpoint' => $endpoint
            ]);
        }
    }

    public function complete()
    {
        return view('thank-you');
    }
}

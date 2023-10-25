<?php

namespace App\Http\Controllers\Personal;

class DashboardController extends BaseController
{
    public function index()
    {
        parent::init();
        $url = $this->baseUrl . "/dashboard";
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $data = $response->getData();
        }
        return view('pages.personal.dashboard', [
            'token' => session('access_token'),
            'employee' => $this->employee,
            'company' => $this->company,
            'work_today' => $data['work_today'] ?? null,
            'schedule' => $data['schedule'] ?? null,
            'clock_in_url' => config('app.api_endpoint') . $this->baseUrl . "/clock"
        ]);
    }
}

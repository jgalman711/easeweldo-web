<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->session()->get('data');
        $employee = optional(optional($data['user'])['employee']);
        $company = optional(optional($data['user'])['companies'])[0];

        $url = "companies/{$company['slug']}/employees/{$employee['id']}/dashboard";
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $data = $response->getData();
        }
        return view('pages.personal.dashboard', [
            'token' => session('access_token'),
            'employee' => $employee,
            'company' => $company,
            'work_today' => $data['work_today'] ?? null,
            'schedule' => $data['schedule'] ?? null,
            'clock_in_url' => env('EASEWELDO_API_DOMAIN') . "companies/{$company['slug']}/employees/{$employee['id']}/clock"
        ]);
    }
}

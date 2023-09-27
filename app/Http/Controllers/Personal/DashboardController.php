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
            'employee' => $employee,
            'company' => $company,
            'work_today' => $data['work_today'],
            'schedule' => $data['schedule']
        ]);
    }
}

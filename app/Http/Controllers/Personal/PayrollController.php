<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->session()->get('data');
        $employee = optional(optional($data['user'])['employee']);
        $company = optional(optional($data['user'])['companies'])[0];
        $url = "companies/{$company['slug']}/employees/{$employee['id']}/payrolls";
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $data = $response->getData();
            return view('pages.personal.payrolls', [
                'payrolls' => $data
            ]);
        }
    }

    public function show(Request $request, int $payrollId)
    {
        $data = $request->session()->get('data');
        $employee = optional(optional($data['user'])['employee']);
        $company = optional(optional($data['user'])['companies'])[0];
        $url = "companies/{$company['slug']}/employees/{$employee['id']}/payrolls/{$payrollId}";
        $response = $this->httpService->get($url);
        if ($response->isSuccess()) {
            $payroll = $response->getData();
            return view('pages.personal.payrolls-show', [
                'payroll' => $payroll
            ]);
        }
        return view('pages.personal.payrolls-show');
    }
}

<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class PayrollController extends BaseController
{
    public function index(Request $request)
    {
        parent::init($request);
        $url = $this->baseUrl . "/payrolls";
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $data = $response->getData();
        }
        return view('pages.personal.payrolls', [
            'employee' => $this->employee,
            'payrolls' => $data ?? null
        ]);
    }

    public function show(Request $request, int $payrollId)
    {
        parent::init($request);
        $url = $this->baseUrl . "/payrolls/{$payrollId}";
        $response = $this->httpService->get($url);
        if ($response->isSuccess()) {
            $payroll = $response->getData();
            return view('pages.personal.payrolls-show', [
                'employee' => $this->employee,
                'payroll' => $payroll
            ]);
        }
        return view('pages.personal.payrolls-show');
    }
}

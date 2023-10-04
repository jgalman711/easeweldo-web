<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class LeaveController extends BaseController
{
    public function index(Request $request)
    {
        parent::init($request);
        $url = $this->baseUrl . "/leaves";
        $response = $this->httpService->get($url, [
            'sort' => '-date'
        ]);

        if ($response->isSuccess()) {
            $leaves = $response->getData();
        }

        $url = $this->baseUrl . "/salary-computation";
        $response = $this->httpService->get($url);

        if ($response->isSuccess()) {
            $salaryComputation = $response->getData();
        }

        return view('pages.personal.leaves', [
            'leaves' => $leaves,
            'salary_compuation' => $salaryComputation
        ]);
    }
}

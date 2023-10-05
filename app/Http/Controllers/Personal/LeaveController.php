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
            'leaves' => $leaves ?? null,
            'salary_compuation' => $salaryComputation ?? null
        ]);
    }

    public function create()
    {
        return view('pages.personal.leaves-apply');
    }

    public function store(Request $request)
    {
        parent::init($request);
        $url = $this->baseUrl . "/leaves";
        $response = $this->httpService->post($url, $request->all());

        if ($response->isFailed()) {
            return redirect()->back()->withInput()->withErrors(['error' => $response->getErrors()]);
        }

        if ($response->isSuccess()) {
            return redirect()->back()->with('success', 'Leave application has been submitted successfully.');
        }
        return redirect()->back()->withInput();
    }
}

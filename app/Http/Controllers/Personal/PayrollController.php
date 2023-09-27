<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index()
    {
        return view('pages.personal.payrolls');
    }

    public function show(int $payrollId)
    {
        // $response = $this->httpService->get('subscription-prices', ['search' => 36]);
        return view('pages.personal.payrolls-show');
    }
}

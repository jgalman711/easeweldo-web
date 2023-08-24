<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {

    }
    public function store(Request $request)
    {
        $request->validate([
            'company_id' => 'required',
            'subscriptions' => 'required|array',
        ]);
        $response = $this->httpService->post("{$request->company_id}/subscriptions", $request->all());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {
        $data = Cache::remember('index', 3600, function () {
            $response = $this->httpService->get('subscriptions');
            if (isset($response['success']) && $response['success']) {
                $subscriptions = $response['data'];
            }

            return [
                'subscriptions' => $subscriptions
            ];
        });
        return view('easeweldo', $data);
    }
}

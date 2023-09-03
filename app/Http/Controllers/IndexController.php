<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {
        $data = Cache::remember('index', 3600, function () {
            $response = $this->httpService->get('subscription-prices', ['search' => 36]);
            $colorClasses = [
                'bg-primary',
                'bg-green-400',
                'bg-purple-400'
            ];
            if ($response->isSuccess()) {
                return [
                    'subscriptions' => $response->getData(),
                    'color_classes' => $colorClasses
                ];
            }
        });
        return view('easeweldo', $data);
    }
}

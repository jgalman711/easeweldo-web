<?php

namespace App\Http\Controllers;

use App\Services\HttpService;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    protected $httpService;

    public function __construct(HttpService $httpService)
    {
        $this->httpService = $httpService;
    }

    public function index()
    {
        $data = Cache::remember('index', 3600, function () {
            $subscriptions = $this->httpService->get('subscriptions');
            return [
                'subscriptions' => $subscriptions
            ];
        });
        return view('easeweldo', $data);
    }
}

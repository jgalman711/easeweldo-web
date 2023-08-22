<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpService
{
    protected $endpoint;

    public function __construct()
    {
        $this->endpoint = env('EASEWELDO_API_DOMAIN');
    }

    public function get(string $uri)
    {
        $uri = $this->endpoint . $uri;
        $response = Http::get($uri)->json();
        if (isset($response['success']) && $response['success']) {
            return $response['data'];
        }
    }
}

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

    public function get(string $uri, array $data = [])
    {
        $token = session('access_token');
        $uri = $this->endpoint . $uri;
        $query = http_build_query($data);
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($uri, $query)->json();
    }

    public function post(string $uri, array $data = [])
    {
        $token = session('access_token');
        $uri = $this->endpoint . $uri;
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post($uri, $data)->json();
    }
}

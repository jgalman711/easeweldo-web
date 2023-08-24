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
        $uri = $this->endpoint . $uri;
        $queryString = http_build_query($data);
        return Http::get($uri, $queryString)->json();
    }

    public function post(string $uri, array $data = [])
    {
        $uri = $this->endpoint . $uri;
        return Http::post($uri, $data)->json();
    }
}

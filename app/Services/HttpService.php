<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpService
{
    public $apiEndpoint = "http://api-sahodna.test/api/";

    public function get(string $uri)
    {
        $uri = $this->apiEndpoint . $uri;
        $response = Http::get($uri)->json();
        if (isset($response['success']) && $response['success']) {
            return $response['data'];
        }
    }
    
}

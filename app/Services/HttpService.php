<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpService
{
    protected $endpoint;

    protected $response;

    protected $jsonResponse;

    public function __construct()
    {
        $this->endpoint = config('app.api_endpoint');
    }

    public function get(string $uri, array $data = []): self
    {
        $token = session('access_token');
        $uri = $this->endpoint . $uri;
        $query = http_build_query($data);
        $this->response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json'
        ])->get($uri, $query);
        $this->jsonResponse = $this->response->json();
        return $this;
    }

    public function post(string $uri, array $data = []): self
    {
        $token = session('access_token');
        $uri = $this->endpoint . $uri;
        $this->response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json'
        ])->post($uri, $data);
        $this->jsonResponse = $this->response->json();
        return $this;
    }

    public function patch(string $uri, array $data = []): self
    {
        $token = session('access_token');
        $uri = $this->endpoint . $uri;
        $this->response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json'
        ])->patch($uri, $data);
        $this->jsonResponse = $this->response->json();
        return $this;
    }


    public function isSuccess(): bool
    {
        return isset($this->jsonResponse['success']) && $this->jsonResponse['success'];
    }

    public function isFailed(): bool
    {
        return isset($this->jsonResponse['success']) && !$this->jsonResponse['success'];
    }

    public function isDataEmpty(): bool
    {
        if ($this->isSuccess()) {
            $data = $this->getData();
            if (empty($data)) {
                return true;
            }
        } elseif ($this->isFailed()) {
            return true;
        }
        return false;
    }

    public function getData()
    {
        if (isset($this->jsonResponse['data']) && $this->jsonResponse['data']) {
            return $this->jsonResponse['data'];
        }
        return null;
    }

    public function getMessage()
    {
        if (isset($this->jsonResponse['message']) && $this->jsonResponse['message']) {
            return $this->jsonResponse['message'];
        }
        return null;
    }

    public function getErrors()
    {
        if ($this->isFailed()) {
            return $this->jsonResponse['errors'] ?? [$this->jsonResponse['message']];
        }
        return null;
    }

    public function getBody()
    {
        return $this->response->body();
    }
}

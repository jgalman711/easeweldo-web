<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpService
{
    protected $endpoint;

    protected $response;

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
        ])->get($uri, $query)->json();
        return $this;
    }

    public function post(string $uri, array $data = []): self
    {
        $token = session('access_token');
        $uri = $this->endpoint . $uri;
        $this->response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post($uri, $data)->json();
        return $this;
    }

    public function isSuccess(): bool
    {
        return isset($this->response['success']) && $this->response['success'];
    }

    public function isFailed(): bool
    {
        return isset($this->response['success']) && !$this->response['success'];
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
        if (isset($this->response['data']) && $this->response['data']) {
            return $this->response['data'];
        }
        return null;
    }

    public function getMessage()
    {
        if (isset($this->response['message']) && $this->response['message']) {
            return $this->response['message'];
        }
        return null;
    }

    public function getErrors()
    {
        if ($this->isFailed()) {
            return $this->response['errors'] ?? [$this->response['message']];
        }
        return null;
    }
}

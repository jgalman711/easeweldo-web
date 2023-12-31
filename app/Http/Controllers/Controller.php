<?php

namespace App\Http\Controllers;

use App\Services\HttpService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $httpService;

    protected $baseUrl;

    public function __construct(HttpService $httpService)
    {
        $this->httpService = $httpService;
    }

    public function init()
    {
        $this->baseUrl = "companies/" . $this->company['slug'] . "/employees/" . $this->employee['id'];
    }
}

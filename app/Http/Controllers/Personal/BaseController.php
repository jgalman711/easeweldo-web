<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $data;
    protected $employee;
    protected $company;
    protected $baseUrl;

    public function init()
    {
        $this->employee = session('employee');
        $this->company = session('company');
        if (isset($this->company['slug']) && isset($this->employee['id'])) {
            $this->baseUrl = "companies/" . $this->company['slug'] . "/employees/" . $this->employee['id'];
        }
    }
}

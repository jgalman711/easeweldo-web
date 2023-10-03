<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $data;
    protected $employee;
    protected $company;
    protected $baseUrl;

    public function init(Request $request)
    {
        $this->data = $request->session()->get('data');
        $this->employee = optional(optional($this->data['user'])['employee']);
        $this->company = optional(optional($this->data['user'])['companies'])[0];
        $this->baseUrl = "companies/" . $this->company['slug'] . "/employees/" . $this->employee['id'];
    }
}

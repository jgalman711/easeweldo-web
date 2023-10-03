<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;

class TimesheetController extends BaseController
{
    public function index(Request $request)
    {
        parent::init($request);
    }
}

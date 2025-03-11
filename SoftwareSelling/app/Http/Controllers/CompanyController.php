<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function Company()
    {
        return view('Company.Dashboard');
    }
}

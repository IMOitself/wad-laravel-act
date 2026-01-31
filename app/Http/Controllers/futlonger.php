<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class futlonger extends Controller
{
    public function index(): View
    {
        return view('burger');
    }
}

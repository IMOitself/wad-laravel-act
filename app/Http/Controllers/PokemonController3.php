<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PokemonController3 extends Controller
{
    public function index(): View
    {
        return view('pokemon3');
    }
}

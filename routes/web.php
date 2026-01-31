<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\futlonger;
use App\Http\Controllers\PokemonController1;
use App\Http\Controllers\PokemonController2;
use App\Http\Controllers\PokemonController3;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/link1', function () {
    return 'Hello world';
});

Route::get('/link2', function () {
    return '<div style="justify-items: center; text-align: center; align-content: center; height: 100vh"><h1>My name is Peter B. Parker<br>and for the past few years, I have been the one and only Spiderman</h1></div>';
});

Route::get('/link3', [futlonger::class, 'index']);

Route::get('/pokemon1', [PokemonController1::class, 'index']);
Route::get('/pokemon2', [PokemonController2::class, 'index']);
Route::get('/pokemon3', [PokemonController3 ::class, 'index']);


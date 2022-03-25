<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data=[
        "stringa" => "Hello World!"
    ];
    return view('firstPage', $data);
});

Route::get('home', function () {
    return view('home');
});

Route::get('prodotti', function () {
    return view('prodotti');
});


Route::get('contatti', function () {
    return view('contatti');
});

Route::get('carrello', function () {
    return view('carrello');
});


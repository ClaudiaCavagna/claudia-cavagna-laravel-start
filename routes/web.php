<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stringa', function(){
    return "Sono una stringa";
});

Route::get('/intero', function(){
    return 99;
});

Route::get('/array', function(){
    $array=["Sono", "un", "array"];
    return $array[2];
});

Route::get('/chi-siamo', function(){
    return view('chisiamo');
});

Route::get('/contatti', function(){
    return view('contatti');
});

Route::get('storia', function(){
    return view('storia');
});
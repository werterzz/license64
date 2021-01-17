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
    return view('content');
});

Route::get('/tabthree', 'Tab3Controller@index');

Route::post('/tabone/{id}/{answer}', 'Tab1Controller@submit');

Route::get('/tabone/{id}/{answer}', 'Tab1Controller@show');
Route::get('/tabtwo/{name}', 'Tab2Controller@show');
Route::get('/tabthree/{name}/{listId}', 'Tab3Controller@show');

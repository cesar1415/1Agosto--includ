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

Route::get('master', function () {
    return view('admin/master');
});

Route::get('/', function (){
    return view('index');
});
Route::get('acercade', function () {
    return view('acercade');
    });
Route::get('servicios', function (){
    return view('servicios');
});

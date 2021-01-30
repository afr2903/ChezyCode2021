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
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/map', function () {
    return view('maptemplate');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/recomendations', function () {
    return view('blog');
});
Route::get('/results', function () {
    return view('results');
});
Route::get('/certificate', function () {
    return view('certificate');
});
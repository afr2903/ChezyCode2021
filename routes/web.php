<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Control;

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

Route::get('/', [Control::class, 'home'] );

Route::get('home', [Control::class, 'home'] );

Route::get('test', [Control::class, 'test'] );

Route::post('submit', [Control::class, 'submit'] );

Route::get('map', [Control::class, 'map'] );

Route::get('recomendations', [Control::class, 'blog'] );

Route::get('results', [Control::class, 'results'] );

Route::get('certificate', [Control::class, 'certificate'] );

Route::get('release', [Control::class, 'release']);

Route::post('sign', [Control::class, 'sign']);


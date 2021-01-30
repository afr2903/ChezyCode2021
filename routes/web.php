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

Route::get('/', [Control::class, 'welcome'] );

Route::get('test', [Control::class, 'test'] );

Route::post('submit', [Control::class, 'submit'] );

Route::get('map', [Control::class, 'map'] );
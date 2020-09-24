<?php

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\Hall;
use App\Models\User;
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

Route::get('/', [HomeController::class, 'index']);
Route::resource('/hall', \App\Http\Controllers\Hall::class);
Route::resource('/review', \App\Http\Controllers\Ratting::class);

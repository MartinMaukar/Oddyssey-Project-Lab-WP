<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
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


Route::redirect('/','login');


Route::get('/login',[LoginController::class, 'login'])->name('login');  
Route::get('/register',[LoginController::class, 'register']); 

Route::get('/dashboard',[DashboardController::class,'display']);
Route::get('/detail/{id}/{category_id}',[DashboardController::class,'detail']);
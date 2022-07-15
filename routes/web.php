<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\LoginChecking;
use App\Http\Middleware\LogoutChecking;
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


Route::redirect('/','dashboard');

Route::middleware([LoginChecking::class])->group(function (){
    Route::post('/logout', [LoginController::class, 'logoutCheck']);
    Route::post('/form',[DashboardController::class,'form']);
    Route::get('/addcart/{id}',[DashboardController::class, 'addtocart']);
    Route::get('/cart',[DashboardController::class, 'addtocart']);

    Route::post('/logout', [AdminController::class, 'logoutAdmin']);
    Route::get('/admindash',[AdminController::class,'displayAdmin']);
    Route::get('/adminaddgame',[AdminController::class,'displayAddGame']);
    Route::post('/adminaddgame',[AdminController::class,'addgame']);
});
    
Route::middleware([LogoutChecking::class])->group(function (){
    Route::get('/login',[LoginController::class, 'login'])->name('login');  
    Route::post('/login',[LoginController::class, 'loginCheck']); 

    Route::get('/register',[LoginController::class, 'register']); 
    Route::post('/register',[LoginController::class, 'store']); 
});


Route::get('/dashboard',[DashboardController::class,'display']);
Route::get('/searchresult',[DashboardController::class,'search']);
Route::get('/detail/{id}/{category_id}',[DashboardController::class,'detail']);


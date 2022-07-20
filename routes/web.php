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
    Route::post('/form',[DashboardController::class,'form'])->middleware('auth');
    Route::get('/addcart/{id}',[DashboardController::class, 'addtocart'])->middleware('auth');
    Route::get('/cart',[DashboardController::class, 'displaycart'])->middleware('auth');
    Route::get('/removecart/{id}',[DashboardController::class, 'removecart'])->middleware('auth');
    Route::put('/checkout',[DashboardController::class,'checkout'])->middleware('auth');

    Route::post('/logout', [AdminController::class, 'logoutAdmin']);
    Route::get('/admindash',[AdminController::class,'displayAdmin'])->middleware('admin');

    Route::get('/adminaddgame',[AdminController::class,'displayAddGame'])->middleware('admin');
    Route::post('/adminaddgame',[AdminController::class,'addgame'])->middleware('admin');
    Route::get('/updategame/{id}',[AdminController::class,'displayUpdateGame'])->middleware('admin');
    Route::put('/updategame/{id}',[AdminController::class,'updategame'])->middleware('admin');
    Route::get('/removegame/{id}',[AdminController::class,'removegame'])->middleware('admin');

    Route::get('/adminmanagecategory',[AdminController::class,'displayAddCategory'])->middleware('admin');
    Route::get('/adminaddcategory',[AdminController::class,'displayaddcate'])->middleware('admin');
    Route::post('/adminaddcategory',[AdminController::class,'addcategory'])->middleware('admin');
    Route::get('/adminupdatecategory/{id}',[AdminController::class,'displayUpdateCategory'])->middleware('admin');
    Route::put('/adminupdatecategory/{id}',[AdminController::class,'updatecategory'])->middleware('admin');
    Route::get('/removecategory/{id}',[AdminController::class,'removecategory'])->middleware('admin');
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


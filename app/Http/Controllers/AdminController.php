<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function displayAdmin(){
        return view('admindash', [
            "games"=>Game::paginate(10),
            "categories"=>Category::all()
        ]);
    }

    public function displayAddGame(){
        return view('adminaddgame', [
            
        ]);
    }

    public function logoutAdmin(Request $request){
        if(Auth::check()){
            Auth::logout(); 
        }
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function display(){
        return view('dashboard', [
            "games"=>Game::all(),
            "categories"=>Category::all()
        ]);
        
    }
}

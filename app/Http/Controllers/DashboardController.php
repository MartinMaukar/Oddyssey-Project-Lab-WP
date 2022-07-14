<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\Review;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function display(){

        return view('dashboard', [
            "games"=>Game::all(),
            "categories"=>Category::all()
        ]);
        
    }

    public function search(Request $request){
        $games = Game::where('title', 'LIKE', "%$request->keyword%")->paginate(15);
        return view('searchresult',[
            "games"=>$games,
        ]);
    }

    public function detail($id,$category_id){
        return view('detail', [
            "games"=>Game::find($id),
            "categories"=>Game::where('category_id',$category_id)->get(),
            "reviews"=>Review::where('game_id',$id)->get()
        ]);
        
    }

    public function form(Request $request){
        $review = new Review;
        $review->name = Auth::user()->name;
        $review->recommended = isset($request->recommended);
        $review->game_id = $request->game_id;
        $review->category_id = $request->category_id;
        $review->review_desc = $request->description;
        $review->save();
        return redirect('/detail/'.$request->game_id.'/'.$request->category_id);
    }

    
}

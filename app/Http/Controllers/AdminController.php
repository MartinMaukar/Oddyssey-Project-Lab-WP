<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use Carbon\Carbon;
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
            "categories"=>Category::all()
        ]);
    }

    public function addgame(Request $request){

        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg,svg',
            'slider1' => 'required|mimes:jpg,png,jpeg,svg',
            'slider2' => 'required|mimes:jpg,png,jpeg,svg',
            'slider3' => 'required|mimes:jpg,png,jpeg,svg',
            'detail' => 'required|min:10'
        ]);

        $game = new Game();
        $game->category_id = $request->category;
        $game->title = $request->title;
        $game->description = $request->detail;
        $game->price = $request->price;
        $game->release = Carbon::now()->format('m d,Y');

        $thumbnail = $request->file('thumbnail');
        $thumbname = $game->title.'TN'.$thumbnail->extension();
        $game->move('/public',$thumbname);
        $game->thumbnail = $thumbname;

        $image1 = $request->file('slider1');
        $slidername1 = $game->title.'1'.$image1->extension();
        $game->move('/public',$slidername1);
        $game->image1 = $slidername1;

        $image2 = $request->file('slider2');
        $slidername2 = $game->title.'2'.$image2->extension();
        $game->move('/public',$slidername2);
        $game->image2 = $slidername2;

        $image3 = $request->file('slider3');
        $slidername3 = $game->title.'3'.$image3->extension();
        $game->move('/public',$slidername3);
        $game->image3 = $slidername3;
        
        $game->save();


        return redirect('/admindash')->with('success','New Game is successfully added !');
        // return request()->all();
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

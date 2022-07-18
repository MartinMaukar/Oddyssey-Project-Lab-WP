<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\Review;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function display(){

        return view('dashboard', [
            "fgames" => Game::all()->sortByDesc('countrecomend'),
            "hgames" => Game::all()->sortByDesc('countpurchase'),
            "categories" => Category::all()
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
        $review->recommended = $request->recommended;
        $review->game_id = $request->game_id;
        $review->category_id = $request->category_id;
        $review->review_desc = $request->description;
        $review->save();
        if($request->recommended){
            $games = Game::where('id',$request->game_id)->first();
            $games->countrecomend += 1;
            $games->save();
        }
        return redirect('/detail/'.$request->game_id.'/'.$request->category_id);
    }

    public function displaycart(){
        $user = Auth::user();
        $cart = Cart::where('user_id',$user->id)->get();

        $total_price=0;

        if($cart){
            foreach($cart as $item){
                $total_price += $item->game->price;
            }
        }

        return view('cart', [
            "cart" => $cart,
            "total_price" => $total_price
        ]);
    }

    public function addtocart($id){
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->game_id = $id;
        $cart->save();

        return redirect('/cart');

    }

    public function removecart($id){
        Cart::where('id',$id)->delete();
        return redirect("/cart");
    }

    
}

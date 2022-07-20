<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Game;
use App\Models\Review;
use App\Models\Transaction;
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
        $reviewz = Review::where('game_id',$id)->first();
        $countrecomend = 0;
        $countnotrecomend = 0;
        
        if($reviewz){
            if($reviewz->recommended == true){
                $countrecomend += 1;
            }
            elseif($reviewz->recommended == false){
                $countnotrecomend += 1;
            }    
        }
        

        return view('detail', [
            "games"=>Game::find($id),
            "categories"=>Game::where('category_id',$category_id)->get(),
            "reviews"=>Review::where('game_id',$id)->get(),
            "countrecomend"=>$countrecomend,
            "countnotrecomend"=>$countnotrecomend
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
        $countitem=0;

        if($cart){
            foreach($cart as $item){
                $total_price += $item->game->price;
                $countitem++;
            }
        }

        return view('cart', [
            "cart" => $cart,
            "total_price" => $total_price,
            "countitem" => $countitem
        ]);
    }

    public function addtocart($id){

        if(Transaction::where('user_id', Auth::user()->id)->where('game_id', $id)->exists()){
            return redirect('/cart')->with('failedmessage','Game add failed since game had been bought before!');
        }

        if(Cart::where('user_id', Auth::user()->id)->where('game_id',$id)->exists()){
            return redirect('/cart')->with('failedmessage','Game add failed since game is already in cart!');
        }

        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->game_id = $id;
        $cart->save();

        return redirect('/cart')->with('message','New game is added to cart!');

    }

    public function removecart($id){
        Cart::where('id',$id)->delete();
        return redirect("/cart")->with('message','Game is removed !');
    }

    public function checkout(Request $request){
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id',$user_id)->get();

        foreach($cart as $item){
            Transaction::firstorcreate([
                'user_id'=>$user_id,
                'game_id'=>$item->game_id
            ]);
            $game = Game::where('id',$item->game_id)->first();
            $game->countpurchase++;
            $game->update();
            Cart::destroy($item->id);
        }

        return redirect("/cart")->with('message','Game in cart successfully check out !');

    }

    
}

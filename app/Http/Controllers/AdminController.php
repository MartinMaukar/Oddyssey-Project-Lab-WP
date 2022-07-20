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

    public function displayAddCategory(){
        return view('adminmanagecategory', [
            "categories"=>Category::all()
        ]);
    }

    public function displayaddcate(){
        return view('adminaddcategory');
    }

    public function addgame(Request $request){
        // dd($request);
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

        // dd($validatedData);

        $game = new Game();
        $game->category_id = $request->category;
        $game->title = $request->title;
        $game->description = $request->detail;
        $game->price = $request->price;
        $game->release = Carbon::now()->format('F d, Y');

        $thumbnail = $request->file('thumbnail');
        $thumbname = $game->title.'TN.'.$thumbnail->extension();
        $thumbnail->move(public_path('/'),$thumbname);
        $game->thumbnail = $thumbname;

        $image1 = $request->file('slider1');
        $slidername1 = $game->title.'1.'.$image1->extension();
        $image1->move(public_path('/'),$slidername1);
        $game->image1 = $slidername1;

        $image2 = $request->file('slider2');
        $slidername2 = $game->title.'2.'.$image2->extension();
        $image2->move(public_path('/'),$slidername2);
        $game->image2 = $slidername2;

        $image3 = $request->file('slider3');
        $slidername3 = $game->title.'3.'.$image3->extension();
        $image3->move(public_path('/'),$slidername3);
        $game->image3 = $slidername3;
        
        $game->save();


        return redirect('/admindash')->with('success','New Game is successfully added !');
        // return request()->all();
    }

    public function displayUpdategame($id){
        return view('updategame', [
            "games"=>Game::where('id', $id)->first(),
            "categories"=>Category::all()
        ]);
    }

    public function updategame(Request $request,$id){
        $UpdateValidatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg,svg',
            'slider1' => 'required|mimes:jpg,png,jpeg,svg',
            'slider2' => 'required|mimes:jpg,png,jpeg,svg',
            'slider3' => 'required|mimes:jpg,png,jpeg,svg',
            'detail' => 'required|min:10'
        ]);

        $game = Game::find($id);

        $game->category_id = $request->category;
        $game->title = $request->title;
        $game->description = $request->detail;
        $game->price = $request->price;
        $game->release = Carbon::now()->format('F d, Y');

        $thumbnail = $request->file('thumbnail');
        $thumbname = $game->title.'TN.'.$thumbnail->extension();
        $thumbnail->move(public_path('/'),$thumbname);
        $game->thumbnail = $thumbname;

        $image1 = $request->file('slider1');
        $slidername1 = $game->title.'1.'.$image1->extension();
        $image1->move(public_path('/'),$slidername1);
        $game->image1 = $slidername1;

        $image2 = $request->file('slider2');
        $slidername2 = $game->title.'2.'.$image2->extension();
        $image2->move(public_path('/'),$slidername2);
        $game->image2 = $slidername2;

        $image3 = $request->file('slider3');
        $slidername3 = $game->title.'3.'.$image3->extension();
        $image3->move(public_path('/'),$slidername3);
        $game->image3 = $slidername3;
        
        $game->update();
        return redirect('/admindash')->with('success','Game is successfully updated !');

    }

    public function removegame($id){
        Game::where('id',$id)->delete();
        return redirect("/admindash")->with('success','Game is successfully removed !');
    }

    public function addcategory(Request $request){
        if(Category::where('category_name', $request->category_name)->exists()){
            return redirect("/adminmanagecategory")->with('error','New category cannot be duplicate !');
        }

        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        return redirect("/adminmanagecategory")->with('success','New category added !');

    }   

    public function displayUpdateCategory($id){
        return view('adminupdatecategory', [
            "category"=>Category::where('id',$id)->first()
        ]);
    }

    public function updatecategory(Request $request,$id){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->update();

        return redirect("/adminmanagecategory")->with('success','Category updated !');

    }

    public function removecategory($id){
        
        Category::find($id)->delete();
        return redirect("/adminmanagecategory")->with('success','Category is successfully removed !');
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

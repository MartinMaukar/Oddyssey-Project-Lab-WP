<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function register(){
        return view('/register');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:50|min:1',
            'email' => 'required|email:dns|unique:users',
            'password'=>'required_with:confirmpassword|min:5|max:30',
            'confirmpassword'=>'min:5|max:30|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['user_type'] = '0';
        // 0->user , 1->admin

        User::create($validatedData);
        $request->session()->flash('donelogin','Registeration successfull ! Please Log In !');

        return redirect('/login');

        // dd('regis done');
        // return request()->all();
    }
}

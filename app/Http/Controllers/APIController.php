<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    public function register(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255|min:1',
            'email' => 'required|email:dns|unique:users',
            'password'=>'required_with:confirmpassword|min:5|max:30',
            'confirmpassword'=>'min:1|max:30|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['user_type'] = '0';
        // 0->user , 1->admin

        $user = User::create($validatedData);
        $token = $user->createToken('API Token')->accessToken;

        return response(['message'=>'success!', 'validatedData'=>$user, 'access_token'=>$token], 200);
        // $request->session()->flash('donelogin','Registeration successfull ! Please Log In !');

        // return redirect('/login');

        // dd('regis done');
        // return request()->all();
    }

    public function login(Request $request){
        $LoginData = $request->validate([
            'email' => 'required|email:dns',
            'password'=>'required|min:5|max:30',
        ]);
        $remember_me = $request->has('remember_me') ? true : false;
        // dd($remember_me);
        
        if(Auth::attempt($LoginData, $remember_me))
        {
            // $request->session()->regenerate();

            // api token
            $token = auth()->user()->createToken('API Token')->accessToken;
            // dd(auth()->user());
            return response(['message'=>'success', 'data'=>auth()->user(), 'access_token'=>$token], 200);

            // if (auth()->user()->user_type == 1) {
            //     return redirect('/dashboard');
            // }else{
            //     return redirect('/dashboard');
            // }
        }

        // return back()->with('loginError', 'Login Failed !');

        // return request()->all();
    }

    public function transaction(){
        $transaction = Transaction::with('game')->where('user_id', Auth()->user()->id)->get();
        return response(['message'=>'success', 'data'=>$transaction]);
    }
}

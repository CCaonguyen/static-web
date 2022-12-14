<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Useradmin;
use App\Models\audio;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
 
  public function shoping()
  {
    return view('shoping');

  }
  
  public function news()
  {
    return view('news');

  }
  public function update()
  {
    return view('update');

  }
  public function chao()
  {
    return view('chao');

  }
  public function payment()
  {
    return view('payment');

  }
  public function register()
  {
    return view('register');

  }
  public function admin()
  {
    return view('admin');

  }
  public function order()
  {
    return view('order');

  }
  public function showlogin()
  {
    return view('login');
    
  }

  
  public function attempt(Request $request)
  {
    dd($request->all());
  }
  public function login(Request $request)
  {
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
     if( Auth::user()->role != 0){
        return redirect()->route('admin');

     }else
     {

      return redirect()->route('home');
     }
    }
   else
    {
    return redirect()->route('login')->with('message','Invalid username or password!');
    }
  }

  public function home()
  {
    return view('home');
    
  }

  public function logout(){
        Auth::logout();
        return redirect('/');
    }

  
  
    public function store(Request $request)
    {
    if($request->isMethod('POST'))  
      {
        $user = DB::table('users')->where('email',$request->email)->first();
        if(!$user)        
        {
            $newUser = new User();
            $newUser->email = $request->email;
            $newUser->password = $request->password;
            $newUser->name = $request->name;
            $newUser->address = $request->address;
            $newUser->save();
            return redirect()->route('login')->with('message','create account success!');

        }
        else
        {
            return redirect()->route('login')->with('message','Account exist!');
        }
      }
    
    }
  }



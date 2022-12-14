<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as ControllersController;
use Faker\Provider\Base;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class UserController extends Controller
{
    public function show_login(){
        return View('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email'=> $request->email, 'password'=>$request->password])) {
        return view('index');
    }
        else
            {
        return redirect()->route('login')->with('message','Invalid username or password');
    }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\audio;

class HomeController extends Controller
{
  public function index()
  {
    $audio=audio::all();
    return view('index', compact('audio'));
    
  }
  public function search(Request $request)
  {

    $search = $request->keyword;

    $audio= audio::query()
    ->where('name_product','LIKE',"%{$search}%")
    ->orwhere('author','LIKE',"%{$search}%")
    ->get();
    return view('albums', compact('audio'),['sucmessage'=>'Search results for'.$search]);
  }
  public function search1(Request $request)
  {

    $search = $request->keyword;

    $audio= audio::query()
    ->where('name_product','LIKE',"%{$search}%")
    ->orwhere('author','LIKE',"%{$search}%")
    ->get();
    return view('list-audio', compact('audio'),['sucmessage'=>'Search results for'.$search]);
  }
}

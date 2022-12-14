<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audio;
use Illuminate\Support\Facades\DB;

class AudioController extends Controller
{
 
 

  public function albums()
  {
    $audio = audio::all();
    return view('albums', compact('audio'));
  }
  
  
  public function list_audio()
  {
    $audio = audio::all();
    return view('list-audio', compact('audio'));
  }

  public function show($id)
  {
    $audio = audio::find($id);
    return view('audio-single',['audio'=>$audio]);
  }
  public function edit($id)
  {
    $audio = audio::find($id);
    return view('update',['audio'=>$audio]);
  }

 public function showupdate(){
    return view('update');
 }

  public function update(Request $request)
  {
    if($request->isMethod('POST'))  {
      $audio = Audio::find($request->id);
      if ($Audio != null) {
            $Audio->Id_product = $request->Id_product;
            $Audio->name_product = $request->name_product;
            $Audio->author = $request->author;
            $Audio->amount = $request->amount;
            $Audio->link = $request->link;
            $Audio->Image = $request->Image;
            $Audio->save();
            return redirect()->back();
            
        }
        else
        {
          return redirect()->back();
        }
      }
    }
  public function destroy($id)
  {
    $audio = audio::find($id);
    $audio->delete();
    return redirect()->back();
  }

  

  public function add()
  {
    return view('add');
  }


    public function store(Request $request)
    {
    if($request->isMethod('POST'))  
      {
            $newAudio = new audio();
            $newAudio->Id_product = $request->Id_product;
            $newAudio->name_product = $request->name_product;
            $newAudio->author = $request->author;
            $newAudio->amount = $request->amount;
            $newAudio->link = $request->link;
            $newAudio->Image = $request->Image;
            $newAudio->save();

            return redirect()->route('management')->with('success','Audio created successfully  ');

        }
        else
        {
            return redirect()->route('add')->with('message','Account exist!');
        }
      }
    
    }
  



<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;




class SongsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function create(){
        return view('songs/addsong');

    }

    public function store()
    {
        $data = request()->validate([
            'url' => 'required',
            'Title' => 'required',
            'Duration'=> 'required',
            'Artist' => 'required',
        ]);
        

        auth()->user()->songs()->create([
            'Title'=> $data['Title'],
            'Duration'=> $data['Duration'],
            'url'=>$data['url'],
            'Artist'=>$data['Artist'],

            
        ]);
        
        return redirect('/profile/' . auth()->user()->id);

        
    }
    public function show(\App\Models\Playlist $playlist){
        return view('playlists.show', compact('playlist'));
    }
}

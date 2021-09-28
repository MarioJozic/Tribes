<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }


    public function create($post_id){
        return view('playlists/createPlaylist'), compact('post_id');

    }

    public function store(Request $request, $post_id)
    {
        $data = request()->validate([
            'Description' => 'required',
            'Title' => 'required',
            

        ]);
        

        auth()->user()->playlists()->create([
            'Title'=> $data['Title'],
            'Description'=> $data['Description'],
            'post_id' => $post_id,
            
        ]);
        
        return redirect('/profile/' . auth()->user()->id);

        
    }
    public function show(\App\Models\Playlist $playlist){
        return view('playlists/showPlaylist', compact('playlist'));
    }
}

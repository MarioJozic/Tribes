<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;




class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function create(){
        return view('posts/create');

    }

    public function store()
    {
        $data = request()->validate([
            'Title' => 'required',
            'Genre' => 'required',
            'Image' => ['required', 'image'],
        ]);
        $image_path=request('Image')->store('uploads', 'public');
        $image= Image::make(public_path("storage/{$image_path}"))->fit(100,100);
        $image->save();

        auth()->user()->posts()->create([
            'Title'=> $data['Title'],
            'Genre'=> $data['Genre'],
            'Image'=>$image_path,
        ]);
        
        return redirect('/profile/' . auth()->user()->id);

        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)    
    {      
       
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user){
        $this->authorize('update', $user->profile);
        
        return view('profiles.edit', compact('user'));


    }

    public function update(User $user){
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'Username'=>'required',
            'email'=>'required',
            'Image' => 'image',
        ]);
        
        if (request('Image')){
        $image_path=request('Image')->store('profile', 'public');
        $image= Image::make(public_path("storage/{$image_path}"))->fit(1000,1000);
        $image->save();
        } 
        
        auth()->user()->profile->update(array_merge(
            $data,
            ['Image'=>$image_path]
        ));       
        
        return redirect("/profile/{$user->id}");
        
    }
}

/* $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('genre');
            $table->string('filepath')->nullable();
            $table->timestamps();

            $table->index('user_id');
*/
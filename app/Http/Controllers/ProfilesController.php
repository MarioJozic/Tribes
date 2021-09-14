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
        return view('profiles.edit', compact('user'));

    }

    public function update(User $user){
        $data = request()->validate([
            'Username'=>'required',
            'email'=>'required',
            'Image' => 'image',
        ]);
        $user->update($data);
        $user->profile->update($data);
        
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
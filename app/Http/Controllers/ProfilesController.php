<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class ProfilesController extends Controller
{
    public function index($user)

    
    {
        $user = User::findOrFail($user);
       
        return view('profiles/index',[
            'user' =>$user,
        ]);
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
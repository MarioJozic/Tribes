<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Http\Request;

class tribesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
         
        return view('home',[
            'user'=>$user,
        ]);
        dd($user);
    }
}

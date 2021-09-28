<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;

    public function playlists(){
        return $this->hasMany(Playlist::class);

    }
}

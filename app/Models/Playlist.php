<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->belongsTo(Post::class);
    }
    use HasFactory;

    public function songs(){
        return $this->hasMany(Song::class);

    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
    
}

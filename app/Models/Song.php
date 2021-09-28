<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->belongsTo(Playlist::class);
    }

    public function playlist(){
        return $this->belongsTo(Playlist::class);
    }
    use HasFactory;


}

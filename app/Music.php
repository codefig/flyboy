<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['title', 'image', 'audio', 'album_id', 'spotify_link', 'itunes_link', 'soundcloud_link'];

    public function album(){
        return $this->belongsTo('App\Album', 'album_id');
    }

    public function checkAlbum(){

       if(count($this->album) > 0)
           return $this->album->title;
       else
           return "      ";
    }
}

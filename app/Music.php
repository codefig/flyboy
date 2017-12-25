<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['title', 'image', 'audio', 'album_id', 'spotify_link', 'itunes_link', 'soundcloud_link'];
}

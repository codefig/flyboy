<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'about', 'image', 'spotify_link', 'itunes_link', 'soundcloud_link'];
}

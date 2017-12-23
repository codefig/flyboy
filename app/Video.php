<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    public $fillable = ['song_title', 'album_title', 'image_link', 'upload_link', 'is_deleted'];
}

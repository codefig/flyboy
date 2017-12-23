<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //

    protected $fillable = ['headline', 'date', 'body', 'image', 'author'];
}

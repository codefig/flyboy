<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $fillable = ['title', 'about', 'location', 'date', 'image', 'time', 'ticket_link'];
}

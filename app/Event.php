<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $fillable = ['title', 'slug','about', 'location', 'date', 'image', 'time', 'ticket_link'];
}

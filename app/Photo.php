<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['image', 'category_id'];

    public function  category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['category_name', 'image', 'is_deleted'];

    public function images(){
        return $this->belongsToMany('App\Photo', 'category_id');
    }
}

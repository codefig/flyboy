<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['category_name','slug', 'image', 'is_deleted'];

    public function images(){
        return $this->belongsToMany('App\Photo', 'category_id');
    }

    public function photo_count(){
        $photos = Photo::where('category_id', $this->id)->get();
        return count($photos);
    }
}

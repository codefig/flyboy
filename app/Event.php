<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Event extends Model
{
    //

    protected $fillable = ['title', 'slug','about', 'location', 'date', 'image', 'time', 'ticket_link'];

    public function limit_text($limit) {
        $text = $this->about;
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }

    public function createDate(){
        return Carbon::parse($this->date);
    }
}

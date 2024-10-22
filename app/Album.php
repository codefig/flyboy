<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Album extends Model {
	protected $fillable = ['title', 'slug', 'about', 'image', 'major_link', 'spotify_link', 'itunes_link', 'soundcloud_link'];

	public function limit_text($limit) {
		$text = $this->about;
		if (str_word_count($text, 0) > $limit) {
			$words = str_word_count($text, 2);
			$pos = array_keys($words);
			$text = substr($text, 0, $pos[$limit]) . '...';
		}
		return $text;
	}

	public function createDate() {
		return Carbon::parse($this->created_at);
	}
}

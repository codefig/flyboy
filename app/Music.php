<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Music extends Model {
	protected $fillable = ['title', 'text', 'slug', 'image', 'audio', 'album_id', 'major_link', 'spotify_link', 'itunes_link', 'soundcloud_link'];

	public function album() {
		return $this->belongsTo('App\Album', 'album_id');
	}

	public function checkAlbum() {

		if (count($this->album) > 0) {
			return $this->album->title;
		} else {
			return "----";
		}

	}

	public function limit_text($limit) {
		$text = $this->text;
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
	//

	protected $fillable = ['headline', 'slug', 'date', 'body', 'image', 'author'];

	public function limit_text($limit) {
		$text = $this->body;
		if (str_word_count($text, 0) > $limit) {
			$words = str_word_count($text, 2);
			$pos = array_keys($words);
			$text = substr($text, 0, $pos[$limit]) . '...';
		}
		return $text;
	}

	public function limit_headline($limit) {

		$text = $this->headline;
		if (str_word_count($text, 0) > $limit) {
			$words = str_word_count($text, 2);
			$pos = array_keys($words);
			$text = substr($text, 0, $pos[$limit]) . '...';
		}
		return $text;

	}

}

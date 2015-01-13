<?php

class TagPicture extends \Eloquent {
	protected $guarded = array();

	public $timestamps = true;

	protected $table = 'tag_picture';

	public function post(){
		return $this->belongsTo('Post','post_id');
	}
}
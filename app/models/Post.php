<?php

class Post extends \Eloquent {
	protected $guarded = array();

	public $timestamps = true;

	protected $table = 'post';
}
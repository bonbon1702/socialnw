<?php

class Comment extends \Eloquent {
	protected $guarded = array();

	public $timestamps = true;

	protected $table = 'comment';
}
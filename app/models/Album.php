<?php

class Album extends \Eloquent {
	protected $guarded = array();

	public $timestamps = true;

	protected $table = 'album';
}
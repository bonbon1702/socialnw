<?php

class ShopPost extends \Eloquent {
	protected $guarded = array();

	public $timestamps = true;

	protected $table = 'shop_post';

	public function shop(){
		return $this->belongsTo('Shop','shop_id');
	}

	public function post(){
		return $this->belongsTo('Post','post_id');
	}

}
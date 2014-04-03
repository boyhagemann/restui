<?php

class Page extends \Eloquent {
	protected $fillable = [];

	protected $hidden = array('id', 'account_id');

	public function content()
	{
		return $this->hasMany('Node');
	}
}
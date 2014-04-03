<?php

class Page extends \Eloquent {
	protected $fillable = [];

	public function content()
	{
		return $this->hasMany('Node');
	}
}
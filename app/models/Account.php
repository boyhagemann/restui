<?php

class Account extends \Eloquent {
	protected $fillable = [];

	/**
	 * @return Resource[]
	 */
	public function resources()
	{
		return $this->hasMany('Resource');
	}
}
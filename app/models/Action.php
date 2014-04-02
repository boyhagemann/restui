<?php

class Action extends \Eloquent {
	protected $fillable = [];

	protected $with = array('resource');

	protected $appends = array('uri');

	public function resource()
	{
		return $this->belongsTo('Resource');
	}

	/**
	 * @return string
	 */
	public function getUriAttribute()
	{
		return $this->resource->uri . $this->path;
	}
}
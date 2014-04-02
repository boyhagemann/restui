<?php

/**
 * Class Resource
 *
 * @property Action[] $actions
 */
class Resource extends \Eloquent {

	protected $fillable = array();

	/**
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function actions()
	{
		return $this->hasMany('Action');
	}
}
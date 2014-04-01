<?php

/**
 * Class Resource
 *
 * @property Action[] $actions
 */
class Resource extends \Eloquent {

	protected $fillable = array();

	public static $sluggable = array(
		'build_from' => 'title',
		'save_to'    => 'slug',
	);

	/**
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function actions()
	{
		return $this->hasMany('Action');
	}
}
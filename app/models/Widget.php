<?php

/**
 * Class Widget
 *
 * @property Resource $dataResource
 * @property Resource $viewResource
 */
class Widget extends \Eloquent {
	protected $fillable = array();

	protected $hidden = array('id', 'account_id', 'page_id', 'widget_id');
	/**
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function dataResource()
	{
		return $this->belongsTo('Resource', 'data_resource_id');
	}

	/**
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function viewResource()
	{
		return $this->belongsTo('Resource', 'view_resource_id');
	}

	/**
	 * @return mixed
	 */
	public function dispatch()
	{
		dd($this->dataResource);
		return $response;
	}
}
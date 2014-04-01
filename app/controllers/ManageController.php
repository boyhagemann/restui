<?php

class ManageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function manage(Resource $resource, Action $action)
	{
		return API::invoke($action->uri, $action->method);
	}

}
<?php

use Guzzle\Http\Client;

class ManageController extends \BaseController {

	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function manage(Action $action)
	{
		$request = $this->client->createRequest($action->method, $action->uri);

		$request->setHeader('X-Requested-With', 'XMLHttpRequest');
		$request->setHeader('Content-Type', $action->content_type);

		$data = $this->client->send($request);

		dd($data->getBody());

		if($action->config_path) {
			$config = API::invoke($action->uri, $action->method);
		}
	}

}
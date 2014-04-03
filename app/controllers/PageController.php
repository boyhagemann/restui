<?php

class PageController extends \BaseController {

	public function dispatch(Page $page)
	{
		$page->load(array('content', 'content.widget', 'content.widget.dataResource', 'content.widget.viewResource'));

//		dd($page->toArray());

		foreach($page->content as $node) {

			$dataResource = $node->widget->dataResource;
			$viewResource = $node->widget->viewResource;

			$params = $node->view_params;

			return API::invokeRemote($viewResource->uri, $viewResource->method, $params);
			dd($node->view_params);
			dd($viewResource->uri);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

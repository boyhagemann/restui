<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::post('viewresource/testview', function() {
	return View::make('testview', Input::all());
});
Route::options('viewresource/testview', function() {
	return array(
		'vars' => array('content', 'sidebar')
	);
});


try {

	Auth::attempt(array('email' => 'test@test.nl', 'password' => 'test'));

	Route::bind('action', function($id) {

		$account = Auth::user()->account;
		$action = Action::findOrFail($id);

		if(!$action->resource->account_id = $account->id) {
			throw new NotFoundException;
		}

		return $action;
	});

	Route::bind('page', function($id) {

		$account = Auth::user()->account;
		$page = Page::findOrFail($id);

		if(!$page->account_id = $account->id) {
			throw new NotFoundException;
		}

		return $page;
	});

	Route::resource('resource', 'ResourceController');

	Route::get('content/{content}', 'ContentController@manage');


	Route::get('dispatch/{page}', 'PageController@dispatch');

}
catch(Illuminate\Database\QueryException $e) {

	return 'Use the restui:install command first';

}




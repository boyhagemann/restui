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

	Route::resource('resource', 'ResourceController');
	Route::get('manage/{action}', 'ManageController@manage');

}
catch(Illuminate\Database\QueryException $e) {

	return 'Use the restui:install command first';

}




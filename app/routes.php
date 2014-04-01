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

Auth::attempt(array('email' => 'test@test.nl', 'password' => 'test'));

Route::bind('resource', function($slug) {
	$account = Auth::user()->account;
	return Resource::where('account_id', $account->id)->whereSlug($slug)->firstOrFail();
});
Route::bind('action', function($slug) {
	$account = Auth::user()->account;
	return Action::whereSlug($slug)->firstOrFail();
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('resource', 'ResourceController');
Route::get('manage/{resource}/{action}', 'ManageController@manage');



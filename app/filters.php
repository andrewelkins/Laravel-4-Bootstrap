<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
<<<<<<< HEAD
| session is logged into this application. Also, a "guest" filter is
| responsible for performing the opposite. Both provide redirects.
=======
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
>>>>>>> 8709c6c6b062658eab23abf18aada550fb2efde9
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('account/login');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::getToken() != Input::get('csrf_token') &&  Session::getToken() != Input::get('_token'))	
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

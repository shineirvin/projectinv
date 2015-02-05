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
/*Route::get('/', function()
{
	return View::make('hello');
});*/
Route::get('/', array('as' => 'home', function () {
    return View::make('home');
}));

Route::get('login', array('as' => 'login', function () {
    return View::make('login');
}))->before('guest');

Route::post('login', 'UserController@login');

Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::route('home')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return View::make('profile');
}))->before('auth');

Route::get('register', array('as' => 'register', function () {
    return View::make('register');
}));

Route::post('register', 'UserController@register');

Route::get('database', array('as' => 'database', function () {
    return View::make('database');
}));

Route::get('databases',array('as'=>'api.users','before'=>'auth','uses'=>'UserController@getUsersDataTable'));

Route::get('resource/{id}',array('as'=>'resources','before'=>'auth','uses'=>'UserController@resource'));

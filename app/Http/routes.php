<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('api/projects', function() {
    return App\Project::all();
});

Route::post('api/projects', function() {
    App\Project::create(Request::all());
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    return view('pages.contact');
});

Route::get('/blog', function() {
    return view('pages.blog');
});

Route::get('/vcss', function() {
    return view('pages.vue-css');
});

Route::get('/resume', function() {
    return view('pages.resume');
});

Route::resource('projects', 'ProjectController');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::auth();

Route::get('/home', 'HomeController@index');

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

//Authentication routes



//Pages routes
Route::get('allevents', 'PagesController@getAllEvents');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');
Route::post('/', 'PagesController@postIndex');

//Route::get('ViewEvent/{id}', ['as' => 'site.single', 'uses' =>'PagesController@getSingle']);

//Events routes
Route::resource('events','EventController'); 

Route::post('events/', ['uses' => 'EventController@store', 'as' => 'events.store']);
Route::post('events/{id}', ['uses' => 'EventController@show', 'as' => 'events.show']);

//Auth routes
Route::auth();

Route::get('/home', 'PagesController@getIndex');

//Comments
Route::post('comments/{event_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

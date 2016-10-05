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
use Orchestra\Parser\Xml\Facade as XmlParser;

Route::get('/', function () {
// 'uses' => 'AdminController@showdata'

});
Route::resource('admin','AdminController@showdata');

Route::auth();

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

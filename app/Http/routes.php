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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::resource('prueba','PruebaController');
/*-----------------------------PANEL DE CONTROL----------------------*/
Route::resource('panel','PanelController');
Route::resource('panel-nuevo-usuario','PanelController@create');
Route::resource('panel-ver-usuarios','PanelController@listado');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

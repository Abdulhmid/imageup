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
Route::controllers([
    'auth'      => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController',
]);

Route::get('/landing2', function()
{
    return view('module.themes.index3');
});

Route::get('/landing3', function()
{
    return view('module.themes.index2');
});


Route::group(["middleware" => "auth"], function (){
  Route::controllers([
       '/admin'       => 'AdminController',
       '/groups'       => 'GroupsController',
       '/posting'       => 'PostingController',
       '/users'       => 'UsersController'
  ]);
});

Route::controller('/', 'HomeController');


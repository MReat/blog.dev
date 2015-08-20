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

Route::get('/', 'HomeController@showWelcome');

Route::get('summary', 'HomeController@showSummary');

Route::get('detail', 'HomeController@showDetail');

Route::get('portfolio', 'HomeController@showPortfolio');

// Route::get('resume', function()
// {
// 	return View::make('resume');
// });

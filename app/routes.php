<?php


Route::get('/', 'HomeController@showWelcome');

Route::get('summary', 'HomeController@showSummary');

Route::get('detail', 'HomeController@showDetail');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('login', 'HomeController@login');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('create_user', 'HomeController@createUser');

Route::post('create_user', 'HomeController@saveUser');

Route::get('user_summary', 'HomeController@showUser');

Route::get('update_account', 'HomeController@editUser');

Route::put('update_account', 'HomeController@updateUser');

Route::delete('my_account', 'HomeController@destroyUser');

Route::get('calculator', 'HomeController@showCalculator');

Route::get('simple-simon', 'HomeController@showSimpleSimon');

Route::get('whack-a-bell', 'HomeController@showWhackABell');

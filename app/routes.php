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

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    $post1 = new Post();
    $post1->title = "1st Title";
    $post1->body = "More words here";
    $post1->save();

    $post2 = new Post();
    $post2->title = "2st Title";
    $post2->body = "Even more words here";
    $post2->save();

    echo "Successful Posting";
});

// Route::get('resume', function()
// {
// 	return View::make('resume');
// });

<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		foreach($posts as $post){
			if(strlen($post->body) > 100) {
			$post->shortString = substr($post->body, 0, 100) . "...";
			}
		}

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(!Input::has('title') && !Input::has('body')) {
			return Redirect::back()->withInput();
		}

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs

	        Session::flash('errorMessage', 'An error has occurred.  Please see below for error: ');

	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$post = new Post();
			$post->title =  Input::get('title');
			$post->body =  Input::get('body');
			$post->save();

			Log::info('Log Message', Input::all());

			Session::flash('successMessage', 'Submission successfully completed');

			return Redirect::action('PostsController@index');
	    }
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
		
			Session::flash('errorMessage', "The post id of $id is not found");

			App::abort(404);
		}

		if(strlen($post->body) > 100) {
			$post->shortString = substr($post->body, 0, 25) . "...";
		}

		return View::make('posts.show')->with('post', $post);
	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);


	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    
	    } else {
	        // validation succeeded, create and save the post

	    if(!$post) {

	    	$message = "Post with id of $id is not found.";

	    	Log::warning($message);
		
			Session::flash('errorMessage', "The post id of $id is not found");

			App::abort(404);
		}
		
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		
		return Redirect::action('PostsController@index', array($id));
	    }

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id)->delete();
		return Redirect::action('PostsController@index');
	}


}

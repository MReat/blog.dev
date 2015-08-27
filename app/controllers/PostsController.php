<?php

class PostsController extends \BaseController {


	public function __construct ()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$query = Post::with('user');

		if(Input::has('user')) {
			$query = Post::with('user')->where('user_id', Auth::id());
		}
		
if (Input::has('search')){
	    	$search = Input::get('search');
	    	$query->where('title', 'LIKE', '%' . $search . '%');
	    	$query->orWhereHas('user', function($q){
	    		$search = Input::get('search');
	    		$q->where('first_name', 'LIKE', '%' . $search . '%');
	    	});
	    	$query->orWhereHas('user', function($q){
	    		$search = Input::get('search');
	    		$q->where('last_name', 'LIKE', '%' . $search . '%');
	    	});
	    }
		$posts = $query->orderBy('created_at', 'desc')->paginate(4);
		
		foreach($posts as $post){
			if(strlen($post->body) > 75) {
			$post->shortString = substr($post->body, 0, 75) . "...";
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
			$post->user_id = Auth::id();
			$post->save();

			Log::info('Post successfully saved.', Input::all());

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
			$post = Post::find($id);

		    if(!$post) {

		    	$message = "Post with id of $id is not found.";

		    	Log::warning($message);
			
				Session::flash('errorMessage', "The post id of $id is not found");

				App::abort(404);
			}
			
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
		$post = Post::find($id);
		
		if(!$post){
			Log::info(Input::all());
			Session::flash('errorMessage', 'Page not found');
			App::abort(404);
		}
		
		$post->delete();
		Log::info(Input::all());
		return Redirect::action('PostsController@index');
	}


}

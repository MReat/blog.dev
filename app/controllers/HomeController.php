<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}

	public function showSummary()
	{
		return View::make('resume-summary');
	}

	public function showDetail()
	{
		return View::make('professional-detail');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function createUser()
	{
		return View::make('create-user');
	}

	public function saveUser()
	{
		if(!Input::has('email') && !Input::has('password')) {
			return Redirect::back()->withInput();
		}

		// create the validator
	    $validator = Validator::make(Input::all(), User::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the user create page with validation errors and old inputs

	        Session::flash('errorMessage', 'An error has occurred.  Please see below for error: ');

	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the user
			$user = new User();
			$user->first_name =  Input::get('first_name');
			$user->last_name =  Input::get('last_name');
			$user->email =  Input::get('email');
			$user->password =  Input::get('password');
			$user->save();

			Log::info('Log Message', Input::all());

			Session::flash('successMessage', 'Submission successfully completed');

			return Redirect::action('HomeController@login');
	    }
	}

	public function editUser()
	{
		$id = Auth::id();
		$user = User::find($id);
		return View::make('edit-user')->with('user', $user);
	}
	
	public function login()
	{
		return View::make('login');
	}
	
	public function logout()
	{
		return View::make('logout');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    // return Redirect::intended('/');
		    return Redirect::action('PostsController@index');
		} else {
			//Display session flash
			//log email that tried to authenticate

			Log::info('Login Successful on : ', Input::get('email'));

			Session::flash('errorMessage', 'Problem with email and/or password. Please resubmit');

		    return Redirect::action('HomeController@login');
		}
	}
	
	public function doLogout()
	{
		Auth::logout();
		//Display session flash
		Session::flash('successMessage', 'Logout successfully completed');

		// return Redirect::to('/');
		return Redirect::action('PostsController@index');
	}

	public function showUser()
	{
		$id = Auth::id();
		$user = User::find($id);
		return View::make('show-user')->with('user', $user);
	}

	public function updateUser()
	{
		$id = Auth::id();
		
		$user = User::find($id);

	    if(!$user) {

	    	$message = "User not found.";

	    	Log::warning($message);
		
			Session::flash('errorMessage', "User not found");

			App::abort(404);
		}
		
			$user->first_name =  Input::get('first_name');
			$user->last_name =  Input::get('last_name');
			$user->email =  Input::get('email');
			$user->save();
			
			return Redirect::action('HomeController@showUser');
	    
	}

	public function destroyUser($id)
	{
		User::find($id)->delete();
		Log::info(Input::all());
		return Redirect::action('HomeController@login');
	}

	// public function showResume()
	// {
	// 	return View::make('resume');
	// }
	
	// public function showSimonSays()
	// {
	// 	return View::make('simonsays');
	// }
	// public function showWhackAMole()
	// {
	// 	return View::make('whackamole');
	// }	
	// public function showCalculator()
	// {
	// 	return View::make('calculator');
	// }

}

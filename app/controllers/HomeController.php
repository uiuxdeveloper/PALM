<?php

class HomeController extends BaseController {

	public $layout = 'layouts.master';
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
	public function index()
	{
		if (Auth::check())
		{
			//Set the title
			$this->layout->title = 'Home';
			//Load user create form
			$this->layout->content = View::make('home.index');
		}
		else {
			return Redirect::route('login');
		}
	}

}

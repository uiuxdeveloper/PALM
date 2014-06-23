<?php

class UserController extends BaseController {

	//Set the layout
	public $layout = 'layouts.auth';
	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return json_encode($users);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//Set the title
		$this->layout->title = 'Sign Up';
		//Load user create form
		$this->layout->content = View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//Validate
		$rules = array(
			'email'		=> 'required|email',
			'password'	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::route('signup')
				->withErrors($validator);
				//->withInput(Input::except('password'));
		} else {
			// store
			$user = new User;
			$user->email      = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->provider = 'local';
			$user->online = 1;
			$user->save();

			Auth::login($user);
			// redirect
			return Redirect::route('home');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /user/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
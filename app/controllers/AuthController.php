<?php

class AuthController extends BaseController {

	public $layout = 'layouts.auth';

	public function index()
	{
		$this->layout->title = 'Login';
    	$this->layout->content = View::make('auth.login');
	}

	public function forgot()
	{
		$this->layout->title = 'Login';
    	$this->layout->content = View::make('auth.forgot');
	}

	public function logout() {
		$user = Auth::user();
		$user->online = 0;
		$user->save();
		Session::flush();
		Auth::logout();
		return Redirect::route('login');
	}

	public function local() {
		//Validate
		$rules = array(
			'email'		=> 'required|email',
			'password'	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::route('login')
				->withErrors($validator);
		} else {
			$credentials = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
			);
			if (Auth::attempt($credentials, $remember = false))
			{
			    return Redirect::route('home');
			}
			else {
				return Redirect::route('signup');
			}
		}
	}

	public function google()
	{
		// get data from input
	    $code = Input::get( 'code' );

	    // get google service
	    $googleService = OAuth::consumer( 'Google' );

	    // check if code is valid

	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {

	        // This was a callback request from google, get the token
	        $token = $googleService -> requestAccessToken( $code );

	        // Send a request with it
	        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

	        $user = User::where('email', '=', $result['email'])->first();

	        if(is_null($user)) {
	        	$user = new User;
				$user->email = $result['email'];
				$user->provider = 'google';
	        }
	        $user->online = 1;
	       	$user->save();

	        Auth::login($user);
	        return Redirect::route('home');
	    }
	    // if not ask for permission first
	    else {
	        // get googleService authorization
	        $url = $googleService->getAuthorizationUri();

	        // return to facebook login url
	        return Redirect::to( (string)$url );
	    }
	}
}

@section('content')
	<section class="jumbotron">
		<header class="container">
	    	<h1 class="animated fadeInRightBig lt-border-blue pl-10 bold">Welcome to PALM Stack!</h1>
	    	<p>
	    		This is a simple PHP, AngularJS, Laravel and MySQL stack.  A simple jumbotron-style component for calling extra attention to featured content or information.
	    	</p>
		</header>
		<article class="signup-container center-block">
			{{ Form::open(array('route' => 'local', 'class'=>'form-horizontal', 'role'=>'form')) }}
			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			    	{{ Form::email('email', Input::old('email'), array(
			    		'class'			=>	'form-control',
			    		'placeholder'	=>	'Email'
			    	)); }}
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			    	{{ Form::password('password', array(
			    		'class'			=>	'form-control',
			    		'placeholder'	=>	'Password'
			    	)); }}
			    </div>
		    	<div class="col-sm-12 text-right">
					<a href="/forgot">Forgot password?</a>
		    	</div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10 lh-30">
			    	<div class="col-sm-8 text-center">
			    		<a href="/signup">Don't have an account? Sign up here!</a>
			    	</div>
			    	<div class="col-sm-4 text-right">
				    	{{ Form::submit('Sign In', array(
				    		'class'		=>	'btn btn-primary'
				    	)); }}
			    	</div>
			    </div>
			  </div>
			{{ Form::close() }}
		</article>
		@if($errors->has())
			<article>
			   	@foreach ($errors->all() as $error)
			     	<p class="animated fadeIn text-center txt-neon-white txt-neon-shadow-white">{{ $error }}</p>
			  	@endforeach
		  	</article>
		@endif
		<footer class="animated fadeIn login-container center-block text-center">
			<ul class="list-inline">
				<li>
					<a class="login-vendor-link" href="/login/google">
						<i class="fa fa-google-plus"></i>
					</a>
				</li>
				<li>
					<a class="login-vendor-link" href="/login/google">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a class="login-vendor-link" href="/login/google">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
			</ul>
		</footer>
	</section>
@endsection

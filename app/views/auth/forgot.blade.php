@section('content')
<section class="forgot-container">
	<div class="panel panel-default panel-transparent">
	  <div class="panel-heading p-10 animated fadeInRightBig">
	    <h1 class="bold">My Wasabi ID</h1>
	  </div>
	  <div class="panel-body forgot-body-container">
	    <div class="col-sm-3 p-30 bg-transparent-black forgot-body-left">
	    	<h3 class="animated fadeIn">Reset your password</h3>
	    	<p class="animated fadeIn">
	    		You can change or reset the password for your Wasabi ID account by providing some information.
	    	</p>
	    </div>
	    <div class="col-sm-9 plr-80 pt-30">
	    	<h3>Enter your Wasabi ID to get started.</h3>
	    	<div class="forgot-form-container center-block">
	    		{{ Form::open(array('route' => 'forgot', 'class'=>'form-horizontal', 'role'=>'form')) }}
				  <div class="form-group">
				    <div class="col-sm-10 text-center">
				    	{{ Form::email('email', Input::old('email'), array(
				    		'class'			=>	'form-control',
				    		'placeholder'	=>	'email@wasabi.com'
				    	)); }}
				    </div>
				  </div>
				  <hr />
				  <div class="form-group">
				    <div class="col-sm-10 text-right">
				    	<a href="/" class="btn btn-default">Cancel</a>
				    	{{ Form::submit('Next', array(
				    		'class'		=>	'btn btn-primary'
				    	)); }}
				    </div>
				  </div>
				{{ Form::close() }}
	    	</div>
	    </div>
	  </div>
	</div>
</section>
@endsection
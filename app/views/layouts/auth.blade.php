<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	@include('includes.auth.head')
</head>
<body>
	@yield('content')
	@include('includes.auth.footer')
	@include('includes.auth.scripts')
</body>
</html>
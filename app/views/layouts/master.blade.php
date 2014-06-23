<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body scroll-bar>
	@include('includes.nav')
	@yield('content')
	@include('includes.footer')
	@include('includes.scripts')
</body>
</html>
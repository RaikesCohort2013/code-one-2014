<!DOCTYPE html>

<html>

<head>
	<title>{{ @yield('title') }}</title>
</head>

<body>

	{{ @include('partials.header') }}

	{{ @yield('body') }}

	{{ @include('partials.footer') }}

</body>

</html>
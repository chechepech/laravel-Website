<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>@yield('title','CHECHE')</title>
	<link type="text/css" rel="stylesheet" href="{{mix('/css/app.css')}}" media="screen">
</head>
<body>
	<div id="app" class="d-flex h-screen justify-content-between flex-column">
		<header id="header" class="">		
			@include('partials/nav')
			@include('partials.session-status')
		</header><!-- /header -->
		<main class="py-3">
			@yield('content')
		</main>		
		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{config('app.name')}} | Copyright @ {{date('Y')}}
		</footer>
	</div>
<script src="{{mix('/js/app.js')}}" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>
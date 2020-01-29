@extends('layout')
@section('title','Home')
@section('content')
<div class="container">
	<div class="row">		
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary text-center">Web Development</h1>
			<p class="lead text-secondary">Welcome to website</p>
			<a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}" title="">CONTACT ME</a>
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}" title="">PORTFOLIO</a>
		</div>
		<div class="col-12 col-lg-6">
			<img src="/img/home.svg" alt="Web Development" class="img-fluid mb-4">
		</div>
	</div>
</div>
@endsection
{{-- @auth
	{{auth()->user()->name}}
@endauth --}}



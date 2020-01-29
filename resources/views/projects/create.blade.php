@extends('layout')
@section('title','Create Project')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">		
		@include('partials.validation-errors')
		<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('projects.store')}}" method="post" accept-charset="utf-8">
			<h1 class="display-5 text-center">NEW PROJECT</h1>
			<hr>		
			@include('projects._form',['btnText'=>'Save'])
		</form>
		</div>
	</div>
</div>
@endsection
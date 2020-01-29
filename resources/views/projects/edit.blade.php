@extends('layout')
@section('title','Edit Project')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">			
			@include('partials.validation-errors')
			<form class="bg-white py-3 px-4 shadow rounded" action="{{ route('projects.update', $project)}}" method="post" accept-charset="utf-8">
				<h1 class="display-5 text-center">EDIT PROJECT</h1>
				<hr>
				@method('PATCH')
				@include('projects._form',['btnText'=>'Update'])
			</form>
		</div>
	</div>
</div>
@endsection
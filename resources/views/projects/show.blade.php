@extends('layout')
@section('title', 'Portfolio | '.$project->title)
@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1 class="display-5 text-center">{{$project->title}}</h1>
		<p class="text-secondary">{{$project->description}}</p>
		<p class="text-black-50">{{$project->created_at->diffForHumans()}}</p>
		<div class="d-flex justify-content-between">
			<a href="{{route('projects.index')}}">Back to home</a>
			@auth
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary" href="{{ route('projects.edit',$project)}}" title="">Edit</a>
				<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Delete</a>
			</div>
				<form id="delete-project" method="post" class="d-none" action="{{route('projects.destroy',$project)}}">
					@csrf @method('DELETE')
				</form>
			@endauth
		</div>
	</div>
</div>
{{-- <p>{{$project->created_at->diffForHumans()}}</p> --}}
@endsection
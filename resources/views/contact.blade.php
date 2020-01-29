@extends('layout')
@section('title','Contact')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">			
			{{-- @if($errors->any())
				@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
				@endforeach
			@endif --}}
			<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store')}}">
				@csrf
				<h1 class="text-center display-5">CONTACT</h1><hr>
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" id='name' name="txtname" class="form-control bg-light shadow-sm @error('txtname')is-invalid @else border-0 @enderror" value="{{old('txtname')}}" placeholder="Enter your name">
					@error('txtname')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" id="email" class="form-control bg-light shadow-sm @error('txtemail')is-invalid @else border-0 @enderror" value="{{old('txtemail')}}" name="txtemail" placeholder="Enter your email">
					@error('txtemail')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="subject">Subject:</label>
					<input type="text" id="subject" class="form-control bg-light shadow-sm @error('txtsubject')is-invalid @else border-0 @enderror" value="{{old('txtsubject')}}" name="txtsubject" value="{{old('name')}}"placeholder="Subject">
					@error('txtsubject')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>		
				<div class="form-group">
					<label for="message">Message:</label>
					<textarea name="txtcontent" id="message" class="form-control bg-light shadow-sm @error('txtcontent')is-invalid @else border-0 @enderror" value="{{old('txtcontent')}}" placeholder="Enter your message"></textarea>
					@error('txtcontent')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<input type="submit" class="btn btn-primary" name="send" value="Send">
			</form>
		</div>
	</div>	
</div>
@endsection
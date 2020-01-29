@csrf
<div class="form-group">
<label for="title">Title</label>
	<input type="text" id="title" name="title" class="form-control border-0 bg-light shadow-sm" value="{{old('title',$project->title)}}">
</div>
<div class="form-group">
<label for="url">URL</label>
	<input type="text" id="url" name="url" class="form-control border-0 bg-light shadow-sm" value="{{old('url',$project->url)}}">
</div>
<div class="form-group">
<label for="description">Description</label>
	<textarea id="description" class="form-control border-0 bg-light shadow-sm" name="description">{{old('description',$project->description)}}</textarea>
</div>
<input type="submit" class="btn btn-primary btn-lg btn-block" name="{{$btnText}}" value="{{$btnText}}">
<a class="btn btn-link btn-block" href="{{route('projects.index')}}">CANCEL</a>
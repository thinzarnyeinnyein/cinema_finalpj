@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2>Movie Edit (Form/ Old value)</h2>
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('movies.update',$movie->id)}}">
			@csrf
			@method('PUT')
			
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5" value="{{$movie->name}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Duration</label>
				<input type="text" name="duration" class="form-control col-sm-5" value="{{$movie->duration}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Language</label>
				<input type="text" name="language" class="form-control col-sm-5" value="{{$movie->language}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Photo</label>
				<input type="file" name="photo" class="form-control col-sm-5">
			</div>
			<div class="col-sm-12">
				<img src="{{asset($movie->photo)}}" class="img-fluid" width="100" height="100">
				<input type="hidden" name="oldphoto" value="{{$movie->photo}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Start Date</label>
				<input type="text" name="start_date" class="form-control col-sm-5" value="{{$movie->start_date}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">End Date</label>
				<input type="text" name="end_date" class="form-control col-sm-5" value="{{$movie->end_date}}">
			</div>
			


		<div class="form-group">	
			<input type="submit" value="update" class="btn btn-primary">
		</div>
	</form>
</div>
	
</div>

@endsection
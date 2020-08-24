@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h1>Create Movie</h1><br>
		
		

		<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('movies.store')}}">
			@csrf
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5 {{$errors->has('name')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Duration</label>
				<input type="date" name="duration" placeholder="dd/mm/yy" class="form-control col-sm-5 {{$errors->has('duration')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('duration')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Language</label>
				<input type="text" name="language" class="form-control col-sm-5 w-50 {{$errors->has('language')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('language')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Photo</label>
				<input type="file" name="photo" class="form-control-file col-sm-5 w-50 {{$errors->has('photo')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('photo')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Start Date</label>
				<input type="text" name="start_date" class="form-control col-sm-5 w-50 {{$errors->has('start_date')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('start_date')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">End Date</label>
				<input type="text" name="end_date" class="form-control col-sm-5 w-50 {{$errors->has('end_date')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('end_date')}}</span>
			</div>
			

			<div class="form-group">	
				<input type="submit" value="Confirm" class="btn btn-primary">
			</div>
		</form>
	</div>

		
	</div>

@endsection
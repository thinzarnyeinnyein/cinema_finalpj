@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2>Staff Edit (Form/ Old value)</h2>
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('user.update',$user->id)}}">
			@csrf
			@method('PUT')
			
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5" value="{{$user->name}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Email</label>
				<input type="text" name="email" class="form-control col-sm-5" value="{{$user->email}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Password</label>
				<input type="number" name="password" class="form-control col-sm-5" value="{{$user->password}}">
			</div>
			
			<div class="form-group">	
				<input type="submit" value="update" class="btn btn-primary">
			</div>
		</form>
	</div>
	
</div>

@endsection
@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h1>Create Staff</h1><br>

	

	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('user.store')}}">
			@csrf
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" placeholder="Enter Your Name" class="form-control col-sm-5 {{$errors->has('name')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Email</label>
				<input type="text" name="email" placeholder="Enter Your email" class="form-control col-sm-5 {{$errors->has('email')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('email')}}</span>
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Password</label>
				<input type="number" name="password" class="form-control col-sm-5 w-50 {{$errors->has('password')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('password')}}</span>
			</div>


			<div class="form-group">	
				<input type="submit" value="Confirm" class="btn btn-primary">
			</div>
		</form>
	</div>


</div>

@endsection
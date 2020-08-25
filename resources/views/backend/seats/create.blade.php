@extends('backendtemplate')
@section('content')

<div class="container">
	<form method="post" action="{{route('seats.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label class="col-sm-2">Type</label>
			<input type="text" name="type" class="form-control col-sm-5 {{$errors->has('type')? 'border-danger':''}}">
			<span style="color: red;">{{$errors->first('type')}}</span>
		</div>
		<div class="form-group row">
			<label class="col-sm-2">Price</label>
			<input type="text" name="price"  class="form-control col-sm-5 {{$errors->has('price')? 'border-danger':''}}">
			<span style="color: red;">{{$errors->first('price')}}</span>
		</div>
		<div class="form-group">	
			<input type="submit" value="Add" class="btn btn-primary">
		</div>
		
	</form>
	
</div>

@endsection
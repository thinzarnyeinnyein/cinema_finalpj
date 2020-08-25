@extends('backendtemplate')
@section('content')


<div class="container">
	<h1 class="d-inline-block">Seat Lists</h1>
	<a href="{{route('seats.create')}}" class="btn btn-primary float-right">Add New Seat</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Type</th>
				<th>Price</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($seats as $seat)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$seat->type}}</td>
				<td>{{$seat->price}}</td>
				
				<td>
					<a href="{{route('seats.edit',$seat->id)}}" class="btn btn-warning">Edit</a>
					
					<form method="post" action="{{route('seats.destroy',$seat->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block" >
						@csrf
						@method("DELETE")
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection
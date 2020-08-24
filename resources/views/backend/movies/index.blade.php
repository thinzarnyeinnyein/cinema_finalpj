@extends('backendtemplate')
@section('content')
<div class="container">
	<h1 class="d-inline-block">Movie Lists</h1>
	<a href="{{route('movies.create')}}" class="btn btn-primary float-right">Add New Movie</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Duration</th>
				<th>Language</th>
				<th>Photo</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($movies as $movie)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$movie->name}}</td>
				<td>{{$movie->duration}}</td>
				<td>{{$movie->language}}</td>
				<td><img src="{{asset($movie->photo)}}" class="img-fluid" width="100" height="100"></td>
				<td>{{$movie->start_date}}</td>
				<td>{{$movie->end_date}}</td>
				<td>
					<a href="{{route('movies.edit',$movie->id)}}" class="btn btn-warning">Edit</a>
					
					<form method="post" action="{{route('movies.destroy',$movie->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block" >
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
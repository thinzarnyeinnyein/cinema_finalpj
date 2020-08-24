@extends('backendtemplate')
@section('content')

<div class="container">
	<h1 class="d-inline-block">Movie Lists</h1>
	<div class="row">
	
	<div class="col-md-4 px-5">
		<img src="{{asset($movie->photo)}}" class="img-fluid" width="100" height="100">
	</div>
	
 		<div class="col-md-8 text-justify">

			<h5 class="text-dark">Name: <span class="text-muted">{{$movie->name}}</span></h5>
			<h5 class="text-dark">Duration: <span class="text-muted">{{$movie->duration}} </h5>
				
			<h5 class="text-dark">Language: <span class="text-muted">{{$movie->language}}</span></h5>
			<h5 class="text-dark">Start Date: <span class="text-muted">{{$movie->start_date}}</span></h5>
			<h5 class="text-dark">End Date: <span class="text-muted">{{$movie->end_date}}</span></h5>

		</div>
	</div>
</div>

@endsection
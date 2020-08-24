@extends('backendtemplate')
@section('content')

<div class="container">
	<h1 class="d-inline-block">Staff Lists</h1>
	<div class="row">

		<div class="col-md-12 text-justify">

			<h5 class="text-dark">Name: <span class="text-muted">{{$user->name}}</span></h5>
			<h5 class="text-dark">Email: <span class="text-muted">{{$user->email}} </h5>
			<h5 class="text-dark">Password: <span class="text-muted">{{$user->password}}</span></h5>
				
			</div>
		</div>
	</div>

@endsection
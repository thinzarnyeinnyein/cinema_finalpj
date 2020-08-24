@extends('backendtemplate')
@section('content')

<div class="container">
	<h1 class="d-inline-block">Staff Lists</h1>
	<a href="{{route('user.create')}}" class="btn btn-primary float-right">Add New Staff</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($users as $user)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->password}}</td>
				
				<td>
					<a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a>
					
					<form method="post" action="{{route('user.destroy',$user->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block" >
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
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				<div class="panel-body">
					User list
					<p>There is {{$users->lastPage()}}</p>
					<table class="table table-striped">
					   <tr>
					   	<th>#</th>
					   	<th>Name</th>
					   	<th>Email</th>
					   	<th>Actions</th>
					   </tr>
					   @foreach($users as $user)
						   <tr>
						   	<td>{{$user->id}}</td>
						   	<td>{{$user->firs_name}}</td>
						   	<td>{{$user->email}}</td>
						   	<td>
						   		<a href="">Edit</a>
						   		<a href="">Delete</a>
						   	</td>
						   </tr>
					   @endforeach
					</table>

					{{$users->Render()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

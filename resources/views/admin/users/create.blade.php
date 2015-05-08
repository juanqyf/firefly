@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">New User</div>

				<div class="panel-body">
					@include('admin.users.partial.message')
					{!!Form::open(['route'=>'admin.users.store', 'method'=>'POST' ])!!}
						 
						@include('admin.users.partial.fields')

						<button type="submit" class="btn btn-default">Save</button>
						  
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

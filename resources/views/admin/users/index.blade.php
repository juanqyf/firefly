@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				@if(Session::has('message'))
					<p class="alert alert-success">{{Session::get('message')}}</p>

				@endif

				<div class="panel-body">
					User list
					
					{!! Form::open(['route'=> 'admin.users.index', 'method'=>'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search'])!!}
					  <div class="form-group">
					  	 {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Type full name filter ']) !!}

					  </div>
					 <button type="submit" class="btn btn-default">search</button>
					{!! Form::close()!!}
					<p>
						<a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">
							Add User
						</a>
					</p>

					<p>There is {{$users->lastPage()}}</p>
						@include('admin.users.partial.table')

					 {!!$users->Render()!!}
				</div>
			</div>
		</div>
	</div>
</div>
{!!Form::open(['route'=>['admin.users.destroy', ':USER_ID'], 'method'=>'DELETE', 'id'=>'form-delete' ])!!}

{!!Form::close()!!}

@endsection



@section('scripts')
<script>
	$(document).ready(function(){
		$('.btn-delete').click( function(e){

			e.preventDefault();

			var row=$(this).parents('tr');
			var id=row.data('id');
			var form= $('#form-delete');
			var url=form.attr('action').replace(':USER_ID',id);
			var data= form.serialize();
			
			 $.post(url,data, function(result){
			 	row.fadeOut();
			 	 alert(result.message);
			 }).facil(function(){
			 	alert('Error al intentar borrar');
			 	row.show();
			 });
		});
	}
	);
</script>
@endsection

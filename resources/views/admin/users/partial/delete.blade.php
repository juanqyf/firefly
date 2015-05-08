{!!Form::open(['route'=>['admin.users.destroy',$user], 'method'=>'DELETE' ])!!}
	<button type="submit" onclick="return confirm('Are you sure????')" class="btn btn-danger">Delete</button>
{!!Form::close()!!}
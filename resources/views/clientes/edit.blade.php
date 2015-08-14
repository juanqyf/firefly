@extends('app')

@section('content')

	<link href="{{ asset('/css/jquerysteps.css') }}" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Cliente </div>

				<div class="panel-body">
					@include('clientes.partial.message')
					{!!Form::model($cliente,['route'=>['clientes.update', $cliente], 'method'=>'PUT' ])!!}
						 
						@include('clientes.partial.fields')

						<button type="submit" class="btn btn-default">Save</button>
						  
					{!!Form::close()!!}
				</div>
			</div>
					@include('clientes.partial.delete')
		</div>
	</div>
</div>
 
@endsection
@section('scripts')

 <script src="{{ asset('/js/jquery.steps.js') }}">
	
 </script>
 <script >
 	// Initialize wizard
	$("#tabs-cliente").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "horizontal",
    autoFocus: true
});
 </script>
@endsection
 
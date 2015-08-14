@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Clientes</div>

				 Hay There is {{$clientes->lastPage()}}
		 		 @include('clientes.partial.table')

					 {!!$clientes->Render()!!}
	
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

<table class="table table-striped">
   <tr>
   	<th>#</th>
   	<th>NIT</th>
   	<th>Cuenta</th>
   	<th>Vendedor</th>
   	<th>Webpage</th>
   	<th>Actions</th>
   </tr>
   @foreach($clientes as $cliente)
	   <tr data-id="{{$cliente->id}}">
	   	<td>{{$cliente->id}}</td>
	   	<td>{{$cliente->nit}}  {{$cliente->dv}}</td>
	   	<td>{{$cliente->rasonsocial}}</td>
	   	<td>{{$cliente->ingeniero_soporte}}</td>
	   	<td>{{$cliente->pagina_web}}</td>
	   	<td>
	   		<a href="{{route('clientes.edit', $cliente)}}">Edit</a>
	   		<a href="" class="btn-delete" >Delete</a>
	   	</td>
	   </tr>
   @endforeach
</table>

<p>	'nit,dv,rasonsocial,datos_generales,historia_cliente,socios,activos,pasivos,patrimonio,
			ventas,no_empleados,negocio,industria,categoria,pagina_web,gerente_negocio,ingeniero_soporte,
			quien_decide,comportamiento_compra,habito_compra,persona_contacto,rutina_contacto,
			observaciones_negociación,forma_pago,credito_interno,crediseguro,estado_credito,costumbre_pago
			estado'	 
</p>
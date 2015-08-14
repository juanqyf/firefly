<div id="tabs-cliente" class=".nav-pills">
    <h3>General</h3>
    <section>
		 <div class="form-group">
		 	{!! Form::label('nit', 'NIT') !!} 
		 	{!! Form::text('nit', null, ['class'=>'form-control', 'placeholder'=>'Type your NIT']) !!}
		 	-{!! Form::text('dv', null, ['class'=>'form-control', 'placeholder'=>'Type your dv']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('razon_social', 'Razón Social') !!} 
		 	{!! Form::text('razon_social', null, ['class'=>'form-control', 'placeholder'=>'Type your Razón Social']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('datos_generales', 'Datos Generales') !!}
		 	{!! Form::text('datos_generales', null, ['class'=>'form-control', 'placeholder'=>'Digite datos Generales']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('historia_cliente', 'Historial del Cliente') !!}
		 	{!! Form::text('historia_cliente',  null, ['class'=>'form-control', 'placeholder'=>'Digite Historia']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('socios', 'Socios') !!}
		 	{!! Form::text('socios', null,  ['class'=>'form-control', 'placeholder'=>'Digite Socios']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('activos', 'Activos') !!}
		 	{!! Form::text('activos', null,  ['class'=>'form-control', 'placeholder'=>'Digite Activos']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('pasivos', 'Pasivos') !!}
		 	{!! Form::text('pasivos', null,  ['class'=>'form-control', 'placeholder'=>'Digite Pasivos']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('patrimonio', 'Patrimonio') !!}
		 	{!! Form::text('patrimonio', null,  ['class'=>'form-control', 'placeholder'=>'Digite Patrimonio']) !!}
		 </div>
	</section>
	<h3>Ventas</h3>
   	<section>
		<div class="form-group">
		 	{!! Form::label('ventas', 'Ventas') !!}
		 	{!! Form::text('ventas',  null, ['class'=>'form-control', 'placeholder'=>'Digite Ventas']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('no_empleados', 'Número de empleados') !!}
		 	{!! Form::text('no_empleados', null,  ['class'=>'form-control', 'placeholder'=>'Digite Número de empleados']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('negocio', 'Negocio') !!}
		 	{!! Form::text('negocio', null,  ['class'=>'form-control', 'placeholder'=>'Digite Negocio']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('industria', 'Industria') !!}
		 	{!! Form::text('industria', null,  ['class'=>'form-control', 'placeholder'=>'Digite Industria']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('categoria', 'Categoría') !!}
		 	{!! Form::text('categoria', null,  ['class'=>'form-control', 'placeholder'=>'Digite Categoría']) !!}
		 </div>
	 </section>	
	<h3>Comercial</h3>
    <section>
		 <div class="form-group">
		 	{!! Form::label('pagina_web', 'Pagina Web') !!}
		 	{!! Form::text('pagina_web', null, ['class'=>'form-control', 'placeholder'=>'Digite Pagina Web']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('gerente_negocio', 'Gerente de Negocio') !!}
		 	{!! Form::text('gerente_negocio', null,  ['class'=>'form-control', 'placeholder'=>'Digite Gerente de Negocio']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('ingeniero_soporte', 'Ingeniero de Soporte') !!}
		 	{!! Form::text('ingeniero_soporte', null,  ['class'=>'form-control', 'placeholder'=>'Digite Ingeniero de Soporte']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('quien_decide', 'Quien Decide') !!}
		 	{!! Form::text('quien_decide', null,  ['class'=>'form-control', 'placeholder'=>'Digite Quien Decide']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('comportamiento_compra', 'Comportamiento de Compra') !!}
		 	{!! Form::text('comportamiento_compra', null,  ['class'=>'form-control', 'placeholder'=>'Comportamiento de Compra']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('habito_compra', 'Hábito de Compra') !!}
		 	{!! Form::text('habito_compra', null, ['class'=>'form-control', 'placeholder'=>'Digite Hábito de Compra']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('persona_contacto', 'Persona de Contacto') !!}
		 	{!! Form::text('persona_contacto', null,  ['class'=>'form-control', 'placeholder'=>'Digite Persona de Contacto']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('rutina_contacto', 'Rutina de Contacto') !!}
		 	{!! Form::text('rutina_contacto', null,  ['class'=>'form-control', 'placeholder'=>'Digite Rutina de Contacto']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('observaciones_negociacion', 'Observaciones de la negociación') !!}
		 	{!! Form::text('observaciones_negociacion', null,  ['class'=>'form-control', 'placeholder'=>'Digite Observaciones de la negociación']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('forma_pago', 'Forma de Pago') !!}
		 	{!! Form::text('forma_pago',  null, ['class'=>'form-control', 'placeholder'=>'Digite Forma de Pago']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('credito_interno', 'Credito Interno') !!}
		 	{!! Form::text('credito_interno', null,  ['class'=>'form-control', 'placeholder'=>'Digite Credito Interno']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('crediseguro', 'Crediseguro') !!}
		 	{!! Form::text('crediseguro', null,  ['class'=>'form-control', 'placeholder'=>'Digite Crediseguro']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('estado_credito', 'Estado de Crédito') !!}
		 	{!! Form::text('estado_credito', null,  ['class'=>'form-control', 'placeholder'=>'Digite Estado de Crédito']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('costumbre_pago', 'Costumbre de Pago') !!}
		 	{!! Form::text('costumbre_pago', null,  ['class'=>'form-control', 'placeholder'=>'Digite Costumbre de Pago']) !!}
		 </div>
		 <div class="form-group">
		 	{!! Form::label('Estado', 'Estado') !!}
		 	{!! Form::select('estado', 
		 	[''=>'Select Estado', 'activo'=>'Activo','Inactivo'=>'Inactivo','prospecto'=>'Prospecto'],null,
		 	['class'=>'form-control']) !!}
		 </div>
	</section>	
 </div>
  <!-- nit,dv,rasonsocial,datos_generales,historia_cliente,socios,activos,pasivos,patrimonio, 
 ventas,no_empleados,negocio,industria,categoria,pagina_web,gerente_negocio,ingeniero_soporte,
 quien_decide,comportamiento_compra,habito_compra,persona_contacto,rutina_contacto, 
 observaciones_negociación,forma_pago,credito_interno,crediseguro,estado_credito,costumbre_pago estado' --> 
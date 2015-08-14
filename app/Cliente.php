<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model {

	//
	protected $table = 'clientes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
 
			/*'nit,dv,rasonsocial,datos_generales,historia_cliente,socios,activos,pasivos,patrimonio,
			ventas,no_empleados,negocio,industria,categoria,pagina_web,gerente_negocio,ingeniero_soporte,
			quien_decide,comportamiento_compra,habito_compra,persona_contacto,rutina_contacto,
			observaciones_negociación,forma_pago,credito_interno,crediseguro,estado_credito,costumbre_pago
			estado'*/ 

	protected $fillable = ['nit,dv,rasonsocial,datos_generales,historia_cliente,socios,activos,pasivos,patrimonio,
			ventas,no_empleados,negocio,industria,categoria,pagina_web,gerente_negocio,ingeniero_soporte,
			quien_decide,comportamiento_compra,habito_compra,persona_contacto,rutina_contacto,
			observaciones_negociación,forma_pago,credito_interno,crediseguro,estado_credito,costumbre_pago
			estado' ];

}

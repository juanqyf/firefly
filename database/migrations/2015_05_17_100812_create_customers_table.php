<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nit')->nullable();
			$table->string('dv')->nullable();
			$table->string('rasonsocial')->nullable();
			$table->mediumText('datos_generales')->nullable();
			$table->mediumText('historia_cliente')->nullable();
			$table->mediumText('socios')->nullable();
			$table->decimal('activos',10,2)->nullable();
			$table->decimal('pasivos',10,2)->nullable();
			$table->decimal('patrimonio',10,2)->nullable();
			$table->decimal('ventas',10,2)->nullable();
			$table->string('no_empleados')->nullable();
			$table->string('negocio')->nullable();
			$table->string('industria')->nullable();
			$table->string('categoria')->nullable();
			$table->string('pagina_web')->nullable();
			$table->string('gerente_negocio')->nullable();
			$table->string('ingeniero_soporte')->nullable();
			$table->string('quien_decide')->nullable();
			$table->string('comportamiento_compra')->nullable();
			$table->string('habito_compra')->nullable();
			$table->string('persona_contacto')->nullable();
			$table->string('rutina_contacto')->nullable();
			$table->mediumText('observaciones_negociación')->nullable();
			$table->string('forma_pago')->nullable();
			$table->string('credito_interno')->nullable();
			$table->string('crediseguro')->nullable();
			$table->string('estado_credito')->nullable();
			$table->string('costumbre_pago')->nullable();
			$table->enum('estado',['activo','inactivo','prospecto']);

			$table->timestamps();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
					->references('id')
					->on('users')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

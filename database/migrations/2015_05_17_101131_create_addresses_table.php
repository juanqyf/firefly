<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('direcciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('direccion1')->nullable();
			$table->string('direccion2')->nullable();
			$table->string('direccion3')->nullable();
			$table->string('ciudad')->nullable();
			$table->string('estado')->nullable();
			$table->string('pais')->nullable();
			$table->string('codigopostal',10,2)->nullable();

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

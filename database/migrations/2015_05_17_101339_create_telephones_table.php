<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelephonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telefonos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('telefono1')->nullable();
			$table->string('telefono2')->nullable();
			$table->string('telefono3')->nullable();
			$table->string('celular')->nullable();
			
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

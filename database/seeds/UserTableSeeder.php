<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		\DB::table('users')->insert(array(
			'name'=>'Juan Carlos Diaz',
			'email'=>'juanqyf@hotmail.com',
			'password'=>\Hash::make('NataJP27')
			));
	}

}
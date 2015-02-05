<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users') -> insert(array(
			'username' => 'irvin',
			'password' => 'rocklee',
			'roles' => 'Owner',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
			));

		DB::table('users') -> insert(array(
			'username' => 'meiliana',
			'password' => 'irvin',
			'roles' => 'designer',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
			));

		DB::table('users') -> insert(array(
			'username' => 'fredi',
			'password' => 'fredi',
			'roles' => 'IT',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users') -> where ('name', '=', 'irvin')-> delete();
	}

}

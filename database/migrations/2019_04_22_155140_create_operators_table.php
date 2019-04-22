<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operators', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('rbt_sms_code');
			$table->string('rbt_ussd_code');
			$table->string('image');
			$table->integer('country_id')->unsigned()->index('operators_country_id_foreign');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('operators');
	}

}

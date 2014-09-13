<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMccCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mcc_codes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sic_code');
			$table->integer('sic_code_grouping');
			$table->string('merchant_type')->nullable();
			$table->string('sic_code_group_type')->nullable();
			$table->string('presentation')->nullable();
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
		//
	}

}

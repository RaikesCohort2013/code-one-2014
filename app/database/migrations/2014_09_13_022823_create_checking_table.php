<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checking_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_prod_cd');
			$table->integer('account_number');
			$table->integer('tran_cd');
			$table->string('tran_description');
			$table->string('tran_detail_description');
			$table->string('db_cr_cd');
			$table->string('category');
			$table->string('post_date');
			$table->double('tran_amount');
			$table->integer('mcc')->nullable();
			$table->string('merchant_type')->nullable();
			$table->string('sic_code')->nullable();
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
		Schema::drop('checking_transactions');
	}

}

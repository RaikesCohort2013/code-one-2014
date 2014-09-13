<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('account_number');
			$table->string('posting_date');
			$table->string('billing_date');
			$table->string('date');
			$table->double('amount');
			$table->string('transaction_code');
			$table->string('merchant_name');
			$table->string('merchant_city');
			$table->string('merchant_state');
			$table->integer('merchant_category');
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
		Schema::drop('transactions');
	}

}

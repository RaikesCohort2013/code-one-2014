<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('id')->unsigned;
			$table->string('sub_prod_cd')->nullable();
			$table->integer('account_number')->unsigned();
			$table->integer('tran_cd')->nullable();
			$table->string('tran_desc')->nullable();
			$table->string('tran_detail_desc')->nullable();
			$table->string('db_cr_cd')->nullable();
			$table->string('category')->nullable();
			$table->string('post_date');
			$table->string('billing_date')->nullable();
			$table->string('date')->nullable();
			$table->double('amount');
			$table->integer('mcc')->unsigned()->nullable();
			$table->string('merchant')->nullable();
			$table->string('transaction_code')->nullable();
			$table->string('merchant_name')->nullable();
			$table->string('merchant_city')->nullable();
			$table->string('merchant_state')->nullable();
			$table->integer('merchant_category')->nullable();
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
		Schema::drop('cd_transactions');
		Schema::drop('ira_transactions');
		Schema::drop('mortgage_transactions');
		Schema::drop('savings_transactions');
		Schema::drop('auto_loan_transactions');
		Schema::drop('card_transactions');
		Schema::drop('checking_transactions');
	}

}

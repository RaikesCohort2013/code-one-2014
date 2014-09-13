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
		Schema::create('cd_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_prod_cd');
			$table->integer('account_number');
			$table->integer('tran_cd');
			$table->string('tran_desc');
			$table->string('tran_detail_desc')->nullable();
			$table->string('db_cr_cd');
			$table->string('category')->nullable();
			$table->string('post_date');
			$table->double('tran_amount');
			$table->string('mcc')->nullable();
			$table->string('merchant')->nullable();
			$table->string('sic_code')->nullable();
			$table->string('presentation')->nullable();
			$table->timestamps();
		});

		Schema::create('ira_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_prod_cd');
			$table->integer('account_number');
			$table->integer('tran_cd');
			$table->string('tran_desc');
			$table->string('tran_detail_desc')->nullable();
			$table->string('db_cr_cd');
			$table->string('category')->nullable();
			$table->string('post_date');
			$table->double('tran_amount');
			$table->string('mcc')->nullable();
			$table->string('merchant')->nullable();
			$table->string('sic_code')->nullable();
			$table->string('presentation')->nullable();
			$table->timestamps();
		});

		Schema::create('mortgage_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_prod_cd');
			$table->integer('account_number');
			$table->integer('tran_cd');
			$table->string('tran_desc');
			$table->string('tran_detail_desc')->nullable();
			$table->string('db_cr_cd');
			$table->string('category')->nullable();
			$table->string('post_date');
			$table->double('tran_amount');
			$table->string('mcc')->nullable();
			$table->string('merchant')->nullable();
			$table->string('sic_code')->nullable();
			$table->string('presentation')->nullable();
			$table->timestamps();
		});

		Schema::create('savings_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_prod_cd');
			$table->integer('account_number');
			$table->integer('tran_cd');
			$table->string('tran_desc');
			$table->string('tran_detail_desc')->nullable();
			$table->string('db_cr_cd');
			$table->string('category')->nullable();
			$table->string('post_date');
			$table->double('tran_amount');
			$table->string('mcc')->nullable();
			$table->string('merchant')->nullable();
			$table->string('sic_code')->nullable();
			$table->string('presentation')->nullable();
			$table->timestamps();
		});

		Schema::create('auto_loan_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_prod_cd');
			$table->integer('account_number');
			$table->integer('tran_cd');
			$table->string('tran_desc');
			$table->string('tran_detail_desc')->nullable();
			$table->string('db_cr_cd');
			$table->string('post_date');
			$table->double('tran_amount');
			$table->string('mcc')->nullable();
			$table->timestamps();
		});

		Schema::create('card_transactions', function(Blueprint $table)
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
		Schema::drop('cd_transactions');
		Schema::drop('ira_transactions');
		Schema::drop('mortgage_transactions');
		Schema::drop('savings_transactions');
		Schema::drop('auto_loan_transactions');
		Schema::drop('card_transactions');
		Schema::drop('checking_transactions');
	}

}

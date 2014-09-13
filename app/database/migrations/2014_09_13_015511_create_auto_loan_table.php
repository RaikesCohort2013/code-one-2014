
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoLoanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auto_loans', function(Blueprint $table)
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
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auto_loans');
	}

}

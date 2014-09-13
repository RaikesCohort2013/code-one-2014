<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TransactionTableSeeder');
		$this->call('AutoLoanTableSeeder');		
		$this->call('CheckingTransactionTableSeeder');
		$this->call('AccountsTableSeeder');
		$this->call('MccCodesTableSeeder');

	}

}

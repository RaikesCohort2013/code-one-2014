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

		$this->call('AutoLoanTransactionsSeeder');
		$this->call('CardTransactionsSeeder');
		$this->call('CdTransactionsSeeder');
		$this->call('CheckingTransactionsSeeder');
		$this->call('MccCodesTableSeeder');
	}

}

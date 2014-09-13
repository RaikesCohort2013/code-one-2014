<?php

class SavingTransactionsSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'savings_transactions';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/savings_transactions.csv'
		];
	}

}
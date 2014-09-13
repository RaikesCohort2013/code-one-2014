<?php

class SavingTransactionsSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'savings_transactions';
		$this->filenames = [
			'/home/vagrant/Code/code-one/app/database/csv/savings_transactions.csv'
		];
	}

}
<?php

class MortgageTransactionsSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'mortgage_transactions';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/mortgage_transactions.csv'
		];
	}

}
<?php

class CheckingTransactionsSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'checking_transactions';
		$this->filenames = [
			'/home/vagrant/Code/code-one/app/database/csv/checking_1_transactions.csv'
		];
	}

}
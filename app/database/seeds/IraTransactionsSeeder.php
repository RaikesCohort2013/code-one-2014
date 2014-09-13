<?php

class IraTransactionsSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'ira_transactions';
		$this->filenames = [
			'/home/vagrant/Code/code-one/app/database/csv/ira_transactions.csv'
		];
	}

}
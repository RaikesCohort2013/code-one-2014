<?php

class CdTransactionsSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'cd_transactions';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/cd_transactions.csv'
		];
	}

}
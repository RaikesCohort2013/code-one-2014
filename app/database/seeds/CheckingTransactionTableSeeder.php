<?php

class CheckingTransactionTableSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'checking_transactions';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/checking_1_seed.csv'
		];
	}

}
<?php

class TransactionTableSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'transactions';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/card1_seed.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/card2_seed.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/card3_seed.csv'
		];
	}

}
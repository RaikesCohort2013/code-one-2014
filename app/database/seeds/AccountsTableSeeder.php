<?php

class AccountsTableSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'accounts';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/cd.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/ira.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/mortgage.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/savings.csv'
		];
	}

}
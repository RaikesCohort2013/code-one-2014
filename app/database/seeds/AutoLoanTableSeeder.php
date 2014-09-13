<?php

class AutoLoanTableSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'auto_loans';
		$this->filenames = ['/home/vagrant/Code/Laravel/app/database/csv/auto_loan_seed.csv'];
	}

}
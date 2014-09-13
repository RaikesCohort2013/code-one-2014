<?php

class AutoLoanTransactionsSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'auto_loan_transactions';
		$this->filenames = ['/home/vagrant/Code/Laravel/app/database/csv/auto_loan_transactions.csv'];
	}

}
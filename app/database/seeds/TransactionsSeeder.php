<?php

class TransactionsSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'transactions';
		$this->filenames = [
			'/home/vagrant/Code/code-one/app/database/csv/auto_loan_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/card1_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/card2_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/card3_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/cd_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/checking_1_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/ira_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/mortgage_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/savings_transactions.csv'
		];
	}

}
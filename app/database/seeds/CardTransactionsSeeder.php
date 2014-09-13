<?php

class CardTransactionsSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'card_transactions';
		$this->filenames = [
			'/home/vagrant/Code/code-one/app/database/csv/card1_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/card2_transactions.csv',
			'/home/vagrant/Code/code-one/app/database/csv/card3_transactions.csv'
		];
	}

}
<?php

class CardTransactionsSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'card_transactions';
		$this->filenames = [
			'/home/vagrant/Code/Laravel/app/database/csv/card1_transactions.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/card2_transactions.csv',
			'/home/vagrant/Code/Laravel/app/database/csv/card3_transactions.csv'
		];
	}

}
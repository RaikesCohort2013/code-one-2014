<?php

class AccountSeeder extends BaseSeeder
{
	
	public function run()
	{

		Account::create([
			'account_number'	=> 1,
			'type'				=> 'checking',
			'username'			=> 'Tobin Brown',
			'name'				=> 'Totally Awesome Checking Account'
		]);

		Account::create([
			'account_number'	=> 987654321,
			'type'				=> 'card',
			'username'			=> 'Tobin Brown',
			'name'				=> 'Tobin\'s Credit Card'
		]);

		Account::create([
			'account_number'	=> 123456789,
			'type'				=> 'card',
			'username'			=> 'Jake Sanchez',
			'name'				=> 'Jake\'s Credit Card'
		]);

		Account::create([
			'account_number'	=>  654321987,
			'type'				=> 'card',
			'username'			=> 'Marcus Pasell',
			'name'				=> 'Marcus\'s Credit Card'
		]);

		Account::create([
			'account_number'	=> 1111,
			'type'				=> 'ira',
			'username'			=> 'Tobin Brown',
			'name'				=> 'IRA Account 1'
		]);

		Account::create([
			'account_number'	=> 2222,
			'type'				=> 'ira',
			'username'			=> 'Jake Sanchez',
			'name'				=> 'IRA Account 2'
		]);

		Account::create([
			'account_number'	=> 3333,
			'type'				=> 'ira',
			'username'			=> 'Marcus Pasell',
			'name'				=> 'IRA Account 3'
		]);

		Account::create([
			'account_number'	=> 4444,
			'type'				=> 'ira',
			'username'			=> 'Bo Pelini',
			'name'				=> 'IRA Account 4'
		]);

		Account::create([
			'account_number'	=> 111,
			'type'				=> 'cd',
			'username'			=> 'Tobin Brown',
			'name'				=> 'CD Account 1'
		]);

		Account::create([
			'account_number'	=> 222,
			'type'				=> 'cd',
			'username'			=> 'Jake Sanchez',
			'name'				=> 'CD Account 2'
		]);

		Account::create([
			'account_number'	=> 333,
			'type'				=> 'cd',
			'username'			=> 'Marcus Pasell',
			'name'				=> 'CD Account 3'
		]);

		Account::create([
			'account_number'	=> 11111,
			'type'				=> 'mortgage',
			'username'			=> 'Bill Bates',
			'name'				=> 'Mortage on our super-huge Mansion'
		]);

		Account::create([
			'account_number'	=> 32,
			'type'				=> 'savings',
			'username'			=> 'Ben Franklin',
			'name'				=> 'A Penny Saved, A Penny Earned'
		]);

		Account::create([
			'account_number'	=> 222222,
			'type'				=> 'auto_loan',
			'username'			=> 'Jake Snachez',
			'name'				=> 'Car Loan'
		]);
	}

}
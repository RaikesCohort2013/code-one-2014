<?php

class AccountSeeder extends BaseSeeder
{
	
	public function run()
	{

		Account::create([
			'account_number'	=> 1,
			'type'				=> 'checking',
			'name'				=> 'Totally Awesome Checking Account'
		]);

		Account::create([
			'account_number'	=> 987654321,
			'type'				=> 'card',
			'name'				=> 'Tobin\'s Credit Card'
		]);

		Account::create([
			'account_number'	=> 123456789,
			'type'				=> 'card',
			'name'				=> 'Jake\'s Credit Card'
		]);

		Account::create([
			'account_number'	=>  654321987,
			'type'				=> 'card',
			'name'				=> 'Marcus\'s Credit Card'
		]);

		Account::create([
			'account_number'	=> 1111,
			'type'				=> 'ira',
			'name'				=> 'IRA Account 1'
		]);

		Account::create([
			'account_number'	=> 2222,
			'type'				=> 'ira',
			'name'				=> 'IRA Account 2'
		]);

		Account::create([
			'account_number'	=> 3333,
			'type'				=> 'ira',
			'name'				=> 'IRA Account 3'
		]);

		Account::create([
			'account_number'	=> 4444,
			'type'				=> 'ira',
			'name'				=> 'IRA Account 4'
		]);

		Account::create([
			'account_number'	=> 111,
			'type'				=> 'cd',
			'name'				=> 'CD Account 1'
		]);

		Account::create([
			'account_number'	=> 222,
			'type'				=> 'cd',
			'name'				=> 'CD Account 2'
		]);

		Account::create([
			'account_number'	=> 333,
			'type'				=> 'cd',
			'name'				=> 'CD Account 3'
		]);

		Account::create([
			'account_number'	=> 11111,
			'type'				=> 'mortgage',
			'name'				=> 'Mortage on our super-huge Mansion'
		]);

		Account::create([
			'account_number'	=> 32,
			'type'				=> 'savings',
			'name'				=> 'A Penny Saved, A Penny Earned'
		]);
	}

}
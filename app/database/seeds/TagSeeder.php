<?php

class TagSeeder extends Seeder
{
	
	public function run()
	{
		Tag::create(['name'	=> 'Fast Food']);
		Tag::create(['name'	=> 'Grocery']);
		Tag::create(['name'	=> 'Rent']);
		Tag::create(['name'	=> 'Utilities']);
		Tag::create(['name'	=> 'Gasoline']);
		Tag::create(['name'	=> 'Entertainment']);
		Tag::create(['name'	=> 'Shopping']);
		Tag::create(['name'	=> 'Travel']);
		Tag::create(['name'	=> 'Services']);
		Tag::create(['name'	=> 'Other']);
	}

}
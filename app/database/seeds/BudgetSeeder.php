<?php

class BudgetSeeder extends Seeder
{
	
	public function run()
	{
		Budget::create(['tag_id'	=> 1, 'amount'	=> 1100]);
		Budget::create(['tag_id'	=> 2, 'amount'	=> 200]);
		Budget::create(['tag_id'	=> 3, 'amount'	=> 1950]);
		Budget::create(['tag_id'	=> 4, 'amount'	=> 750]);
		Budget::create(['tag_id'	=> 5, 'amount'	=> 250]);
		Budget::create(['tag_id'	=> 6, 'amount'	=> 100]);
		Budget::create(['tag_id'	=> 7, 'amount'	=> 1300]);
		Budget::create(['tag_id'	=> 8, 'amount'	=> 200]);
		Budget::create(['tag_id'	=> 9, 'amount'	=> 75]);
		Budget::create(['tag_id'	=> 10, 'amount'	=> 2000]);
	}

}
<?php

class Account extends BaseModel
{
	
	public function transactions()
	{
		return DB::select('select * from '.$this->type.'_transactions');
	}

}
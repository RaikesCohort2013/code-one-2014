<?php

class Budget extends BaseModel
{
	
	protected $table = 'budgets';

	public function account()
	{
		return $this->belongsTo('Account', 'account_number', 'account_number');
	}

}
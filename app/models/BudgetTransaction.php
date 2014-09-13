<?php

class BudgetTransaction extends BaseModel
{

	public function parentTransaction()
	{
		return $this->hasOne('Transaction');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

}
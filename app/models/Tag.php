<?php

class Tag extends BaseModel
{

	protected $fillable = array('name');
	
	public function budgetTransactions()
	{
		return $this->belongsToMany('BudgetTransaction');
	}

}
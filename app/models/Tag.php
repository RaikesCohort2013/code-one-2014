<?php

class Tag extends BaseModel
{
	
	public function budgetTransactions()
	{
		return $this->belongsToMany('BudgetTransaction');
	}

}
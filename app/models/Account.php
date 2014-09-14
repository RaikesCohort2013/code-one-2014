<?php

class Account extends BaseModel
{
	
	public function transactions()
	{
		return Transaction::where('account_number', $this->account_number)->get();
	}

	public function limitTransactions()
	{
		return Transaction::where('account_number', $this->account_number)->limit(10)->get();
	}

}
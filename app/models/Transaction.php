<?php

class Transaction extends BaseModel
{

	protected $table = 'transactions';

	public function account()
	{
		return Account::where('account_number', $this->account_number)->first();
	}

	public function mcc_code()
	{
		return MccCode::where('sic_code', $this->mcc)->first();
	}

	public function date()
	{
		return strtotime($this->post_date);
	}
	
}
<?php

class Transaction extends BaseModel
{

	public function account()
	{
		return Account::where('account_number', $this->account_number)->first();
	}

	public function mccCode()
	{
		return MccCode::where('sic_code', $this->mcc)->first();
	}
	
}
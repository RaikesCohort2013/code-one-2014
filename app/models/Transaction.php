<?php

class Transaction extends BaseModel
{

	public function account()
	{
		return Account::where('account_number', $this->account_number)->first();
	}

<<<<<<< HEAD
	public function mccCode()
	{
		return MccCode::where('sic_code', $this->mcc)->first();
=======
	public function mcc_code()
	{
		return MccCode::where('sic_code', $this->mcc)->first();
	}

	public function date()
	{
		return strtotime($this->post_date);
>>>>>>> bb798634ad4faafd303b9567445834813f7d2dcf
	}
	
}
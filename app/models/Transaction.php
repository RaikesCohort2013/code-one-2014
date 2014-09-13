<?php

class Transaction extends BaseModel
{

	protected $table = 'transactions';

	public function account()
	{
		return $this->belongsTo('Account');
	}
	
}
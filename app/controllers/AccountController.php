<?php

class AccountController extends BaseController
{

	/**
	 * Display a listing of the Accounts.
	 *
	 * @return Response
	 */
	public function index()
	{

	}


	/**
	 * Display the specified Account.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($account_number)
	{
		$account = Account::where('account_number', $account_number)->firstOrFail();
		$transactions = $account->transactions();
		$balance = 0;
		foreach($transactions as $t)
		{
			$balance += $t->tran_amount;
		}
		return $balance;
	}
}

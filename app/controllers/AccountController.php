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
		$accounts = Account::all();
		foreach($accounts as $account)
		{
			$account = $this->addBalanceToAccount($account);
		}
		return $this->jsonResponse($accounts);
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
		$account = $this->addBalanceToAccount($account);
		return $this->jsonResponse($account);
	}

	private function addBalanceToAccount($account)
	{
		$transactions = $account->transactions();
		$balance = 0;
		foreach($transactions as $t)
		{
			$balance += $t->amount;
		}
		$account->balance = $balance;
		return $account;
	}

	private function jsonResponse($data)
	{
		$response = Response::make(json_encode($data));
		$response->header('Content-Type', 'application/json');
		return $response;
	}
}

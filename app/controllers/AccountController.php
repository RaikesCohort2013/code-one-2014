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
		$balance = 0;
		foreach($transactions as $t)
		{
			$balance += $t->amount;
		}
		$account->transactions = $transactions;
		$account->balance = $balance;
		return $this->jsonResponse($account);
	}

	private function jsonResponse($data)
	{
		$response = Response::make(json_encode($data));
		$response->header('Content-Type', 'application/json');
		return $response;
	}
}

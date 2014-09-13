<?php

class TransactionController extends BaseController
{

	/**
	 * Display a listing of the Transactions.
	 *
	 * @return Response
	 */
	public function index($account_number)
	{
		$account = Account::where('account_number', $account_number)->firstOrFail();
		$transactions = $account->transactions();
		return $this->jsonResponse($transactions);
	}

	/**
	 * Display the specified Transaction.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($account_number, $transaction_id)
	{
		//
	}

	private function jsonResponse($data)
	{
		$response = Response::make(json_encode($data));
		$response->header('Content-Type', 'application/json');
		return $response;
	}

}

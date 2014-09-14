<?php

class BudgetTransactionController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /budgettransaction
	 *
	 * @return Response
	 */
	public function index()
	{
		$budgetTransactions = BudgetTransaction::all();
		return $this->jsonResponse($budgetTransactions);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /budgettransaction/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// do dis in backbone
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /budgettransaction
	 *
	 * @return Response
	 */
	public function store($budget_transaction)
	{
		BudgetTransaction::create([
			'transaction_id'	=> $budget_transaction->transaction_id,
			'amount'			=> $budget_transaction->amount,
			'tag_id'			=> $budget_transaction->tag_id
		]);
	}

	/**
	 * Display the specified resource.
	 * GET /budgettransaction/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$budgetTransaction = BudgetTransaction::find(id);
		return $this->jsonResponse($budgetTransaction);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /budgettransaction/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /budgettransaction/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /budgettransaction/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
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
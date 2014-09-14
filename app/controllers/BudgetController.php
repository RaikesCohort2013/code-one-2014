<?php

class BudgetController extends BaseController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$budgets = Budget::all();
		foreach($budgets as $budget)
		{
			$budget->tag_name = $budget->tag()->name;
		}
		return $this->jsonResponse($budgets);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// handled by backbone routes
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($budget)
	{
		$b = new Budget();
		if($b->validate($budget))
		{
			Budget::create([
				'tag_id'	=> $budget->tag_id,
				'amount'	=> $budget->amount
			]);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// handled by backbone routes
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// handled by backbone routes
	}


	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Budget::destroy($id);
	}

	private function jsonResponse($data)
	{
		$response = Response::make(json_encode($data));
		$response->header('Content-Type', 'application/json');
		return $response;
	}

}

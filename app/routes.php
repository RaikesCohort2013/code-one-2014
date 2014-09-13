<?php

Route::get('/', function()
{
	return View::make('accounts');
});

Route::group(array('prefix' => 'api'), function()
{
	// custom routes
	Route::get('accounts/{account_number}/transactions/{start_date}/{end_date}', 'TransactionController@showByDate');
	
	// Resource Controller routes
	Route::resource('accounts', 'AccountController', ['only' => ['index', 'show']]);
	Route::resource('accounts.transactions', 'TransactionController',['only' => ['index', 'show']]);
	Route::resource('budgets', 'BudgetController');

});
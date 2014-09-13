<?php

Route::get('/', function()
{
	return View::make('main');
});

Route::group(array('prefix' => 'api'), function()
{
	Route::resource('accounts', 'AccountController', ['only' => ['index', 'show']]);
	Route::resource('accounts.transactions', 'TransactionController',['only' => ['index', 'show']]);
	Route::resource('budgets', 'BudgetController');
});

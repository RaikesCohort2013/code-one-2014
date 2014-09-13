<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix' => 'api'), function()
{
	Route::resource('accounts', 'AccountController', array('only' => array('index', 'show')));
	Route::resource('accounts.transactions', 'TransactionController',array('only' => array('index', 'show')));
	Route::resource('budgets', 'BudgetController');
});
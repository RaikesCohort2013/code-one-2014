<?php

$accounts = Account::all();

?>

@foreach($accounts as $account)

<h1>{{ $account->name }}</h1>

	@foreach($account->transactions() as $t)

	<p>{{ $t->account_number }}</p>

	@endforeach

@endforeach
<?php

$accounts = Account::all();

?>

@foreach($accounts as $account)

<h1>{{ $account->name }}</h1>

@endforeach
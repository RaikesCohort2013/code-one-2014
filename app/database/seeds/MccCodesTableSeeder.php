<?php

class MccCodesTableSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'mcc_codes';
		$this->filenames = ['/home/vagrant/Code/code-one/app/database/csv/mcc_codes.csv'];
	}

}
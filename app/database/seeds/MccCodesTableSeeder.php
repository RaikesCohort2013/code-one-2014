<?php

class MccCodesTableSeeder extends BaseSeeder
{

	function __construct()
	{
		$this->table = 'mcc_codes';
		$this->filenames = ['/home/vagrant/Code/Laravel/app/database/csv/mcc_codes.csv'];
	}

}
<?php

class CdTableSeeder extends BaseSeeder
{
	
	function __construct()
	{
		$this->table = 'cds';
		$this->filenames = ['/home/vagrant/Code/Laravel/app/database/csv/cd_seed.csv'];
	}

}
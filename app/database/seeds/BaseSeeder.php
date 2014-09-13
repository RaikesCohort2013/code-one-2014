<?php

class BaseSeeder extends Seeder
{
	
	protected $table;
	protected $filenames;

	public function run()
	{
		DB::table($this->table)->truncate();
		foreach($this->filenames as $filename)
		{
			$seedData = $this->seedFromCSV($filename, ',');
			DB::table($this->table)->insert($seedData);
		}
		
	}

	private function seedFromCSV($filename, $deliminator = ",")
	{
		if(!file_exists($filename) || !is_readable($filename))
		{
			return FALSE;
		}

		$header = NULL;
		$data = array();

		if(($handle = fopen($filename, 'r')) !== FALSE)
		{
			while(($row = fgetcsv($handle, 1000, $deliminator)) !== FALSE)
			{
				if(!$header) {
					$header = $row;
				} else {
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}
		return $data;
	}
}
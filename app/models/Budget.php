<?php

class Budget extends BaseModel
{
	
	public function tag()
	{
		return $this->hasOne('Tag');
	}

}
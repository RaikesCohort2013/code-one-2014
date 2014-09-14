<?php

class Budget extends BaseModel
{

	protected $rules = [
		'tag_id'	=> 'integer|required',
		'amount'	=> 'double|required'
	];
	
	public function tag()
	{
		return Tag::find($this->tag_id);
	}

}
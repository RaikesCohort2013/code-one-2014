<?php

use Eloquent, Validator;

class BaseModel extends Eloquent
{

	protected $rules = array();
	protected $errors;

    /**
     * Validate an object on a given input. First it checks to see if the id is set. 
     * If it is, it adds it to satisfy the unique restraint. Then it returns 
     * whether or not it passed along with setting errors to the model.
     *
     * @return boolean, success
     */
	public function validate($input, $id = null)
	{
		$validator = Validator::make($input, $this->rules); 
		if ($validator->fails())
        {
            $this->errors = $validator->errors();
            return false;
        }
        return true;
    }

    /**
     * Return the validator errors from the object
     *
     * @return array, errors
     */
    public function errors()
    {
        return $this->errors;
    }

}
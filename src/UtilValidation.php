<?php 
namespace AlanMilani\UtilValidation;

/**
 * Laravel Custom Validate
 * Development by Alan Milani
 * alan.fabiano@gmail.com
 */


class UtilValidation
{
    

    protected $status;
    
    /**
     * Validate that the attribute is a phone number
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
     */
    public function Phone($attribute, $value)
    {
    	if (preg_match('/^(\([1-9]{2}\))(\s)?([9]{1})?([0-9]{4})([ -.])([0-9]{4})$/', $value)) {
			return true;
		}
		return false;
    }
}
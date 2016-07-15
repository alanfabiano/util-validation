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
    
    public function phone($attribute, $value)
    {
        return ( $this->status ? true : false );
    }
}

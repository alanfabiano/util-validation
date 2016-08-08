<?php

use AlanMilani\UtilValidation\UtilValidation;


class UtilValidationTest extends PHPUnit_Framework_TestCase
{
  
	protected $attribute;


	/**
     * unit test of current zipcode format
     * @author Alan Milani <alan.fabiano@gmail.com>
     * @since Ago 08, 2016
     * @return void
     */
    public function testCep()
    {
    	$this->assertEquals(true, UtilValidation::Cep( null, '85710-000') );
    	$this->assertEquals(true, UtilValidation::Cep( null, '85710000') );
    }

    
}

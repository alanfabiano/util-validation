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
    public function test_validate_zipcode_number()
    {
    	$this->assertEquals(true, UtilValidation::Cep( null, '85710-000') );
    	$this->assertEquals(true, UtilValidation::Cep( null, '85710000') );
    }


    /**
     * unit test of current credit card number
     * @author Alan Milani <alan.fabiano@gmail.com>
     * @since Ago 08, 2016
     * @return void
     */
    public function test_validate_credit_card()
    {
        $this->assertEquals( true, UtilValidation::CreditCard( null, '8571 4000 1234 1233' ) );

        $this->assertEquals( true, UtilValidation::CreditCard( null, '8571.4000.1234.1233' ) );

        $this->assertEquals( true, UtilValidation::CreditCard( null, '8571-4000-1234-1233' ) );

        $this->assertEquals( true, UtilValidation::CreditCard( null, '8571400012341233' ) );

        $this->assertEquals( false, UtilValidation::CreditCard( null, '8571a4000a1234A1233' ) );

        $this->assertEquals( false, UtilValidation::CreditCard( null, 'abcdefghijklmnopqrs' ) );
    }

    /**
     * unit test of cnpj number
     * @author Alan Milani <alan.fabiano@gmail.com>
     * @since Ago 08, 2016
     * @return void
     */
    public function test_validate_cnpj_number()
    {
        $this->assertEquals(true, UtilValidation::Cnpj( null, '11.444.777/0001-61') );
        
        $this->assertEquals(true, UtilValidation::Cnpj( null, '11444777000161') );

        $this->assertEquals(false, UtilValidation::Cnpj( null, '11111111111111') );

    }
    
}

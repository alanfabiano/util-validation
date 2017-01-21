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


    /**
     * Validation for number for CPF
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
    */
    public static function Cpf($attribute, $value)
    {
        $value = preg_replace('/[^0-9]/', '', $value);
        if (strlen($value) < 11 || strlen($value) > 11 || $value == '00000000000' || $value == '11111111111' || $value == '22222222222' || $value == '33333333333' || $value == '44444444444' || $value == '55555555555' || $value == '66666666666' || $value == '77777777777' || $value == '88888888888' || $value == '99999999999')
        {
            return false;
        }else{
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $value{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($value{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }


    /**
     * Validation for number for Zip Code
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
    */
    public static function Cep($attribute, $value)
    {
        if(preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $value)) {
            return true;
        }
        return false;
    }



    /**
     * Validation for number for Credit Card
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
    */
    public static function CreditCard($attribute, $value)
    {
        if(preg_match('/^([0-9]{4,4})([-. ]{0,1}?)([0-9]{4,4})([-. ]{0,1}?)([0-9]{4,4})([-. ]{0,1}?)([0-9]{4,4})?$/', $value)) {
            return true;
        }
        return false;
    }


    /**
     * Validation for valid CNPJ
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
    */
    public static function Cnpj($attribute, $value)
    {
        $cnpj = preg_replace('/[^0-9]/', '', (string) $value);
        if (strlen($cnpj) != 14)
            return false;

        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
        {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto))
            return false;

        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
        {
            $soma += $cnpj{$i} * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;
        return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);    
    }



    /**
     * Validation for username
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
    */
    public static function Username($attribute, $value)
    {
        if( preg_match( '/[^0-9a-z._-]/', $value ) == 0 )
        {
            return true;
        }
        return false;
    }

}
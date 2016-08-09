# Util Validation

Package to extend the validation to form fields to Laravel 5



## Instalation

First, you'll need to require the package with Composer:

```sh
composer require alanfabiano/util-validation
```

Aftwards, run `composer update` from your command line.

Then, update `config/app.php` by adding an entry for the service provider.

```php
'providers' => [
	
	...

	'AlanMilani\UtilValidation\UtilValidationServiceProvider::class',
];
```

Enter the file `validation.php` the parameters of the messages as the code below

```php
return [

	...

	/*
    |--------------------------------------------------------------------------
    | Custom Validation of package Util Validate
    |--------------------------------------------------------------------------
    */
	
	'phone'       => 'The field :attribute does not contain a valid phone number',
	'cpf'         => 'The field :attribute does not contain a valid number',
	'cep'         => 'The field :attribute does not contain a valid zip code',
    'credit_card' => 'The field :attribute does not contain a valid credit card',

];
```




## Usage

```php

	public function rules()
	{
    	return [
    		// VALID FORMAT: "(99) 99999 9999", "(99) 9999 9999"
    		'field_phone' => 'phone',

    		// VALID FORMAT: "999.999.999-99"
    		'field_cpf'   => 'cpf',

    		// VALID FORMAT: "99999-999", "99999999"
    		'field_cep'   => 'cep',

            // VALID FORMAT: "1234.1234.1234.1234", "1234-1234-1234-1234", "1234123412341234"
            'field_credit_card' => 'credit_card'

    	];
    }
```


## Copyright and License

Util-Validate was written by Alan Milani at july 2016.

* Updated at august 2016

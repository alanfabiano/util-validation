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
	
	'phone' => 'The field :attribute does not contain a valid phone number',
	'cpf'   => 'The field :attribute does not contain a valid number',

];
```




## Usage

```php

	public function rules()
	{
    	return [
    		'field_phone' => 'phone',
    		'field_cpf'   => 'cpf', 
    	];
    }
```

## Copyright and License

Util-Validate was written by Alan Milani at july 2016.

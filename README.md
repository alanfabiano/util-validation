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
    'cnpj'        => 'The field :attribute does not contain a valid CNPJ',
    'username'    => 'The field :attribute do not a valid username',

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

        // VALID FORMAT: "99999-999", "99999999", validate using custom API. Request exemple: https://api.pagar.me/1/zipcodes/zipcode/93700000
        'field_cep'   => 'cep:https://api.pagar.me/1/zipcodes/zipcode/',

        // VALID FORMAT: "1234.1234.1234.1234", "1234-1234-1234-1234", "1234123412341234"
        'field_credit_card' => 'credit_card'

        // VALID FORMAT: "11.444.777/0001-61", "11444777000161"
        'field_cnpj' => 'cnpj'

        // VALID FORMAT: "username123", "user-name123", "user_name123", "user.name123"
        'field_username' => 'username'
    ];
}
```


## Copyright and License

Util-Validate was written by Alan Milani at july 2016.

* Updated at december 2017

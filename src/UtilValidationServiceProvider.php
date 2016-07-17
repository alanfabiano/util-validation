<?php
namespace AlanMilani\UtilValidation;

use Illuminate\Support\ServiceProvider;
use Validator;


class UtilValidationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Init Class validation for phone
        $this->utilValidatePhone();

        // Init Class validation for cpf
        $this->utilValidateCpf();

        // Init Class validation for zip code
        $this->utilValidateCep();        
    }
    

    public function register()
    {
        $this->app->bind('UtilValidation', 'AlanMilani\UtilValidation\UtilValidation');
    }


    // Set method for validation of phone
    public function utilValidatePhone()
    {
        $this->app['validator']->extend('phone', 'UtilValidation@Phone' , $this->app['translator']->get('phone::validation.phone'));
    }


    // Set method for validation of CPF
    public function utilValidateCpf()
    {    
        $this->app['validator']->extend('cpf', 'UtilValidation@Cpf' , $this->app['translator']->get('cpf::validation.cpf'));
    }


    // Set Method for validation of ZipCode
    public function utilValidateCep()
    {
        $this->app['validator']->extend('cep', 'UtilValidation@Cep' , $this->app['translator']->get('cep::validation.cep'));
    }

}
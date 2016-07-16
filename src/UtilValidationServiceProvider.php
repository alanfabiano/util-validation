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
    }

    public function register()
    {
        $this->app->bind('UtilValidation', 'AlanMilani\UtilValidation\UtilValidation');
    }

    public function utilValidatePhone()
    {
        // Set Validation and get translate parameter
        $this->app['validator']->extend('phone', 'UtilValidation@Phone' , $this->app['translator']->get('phone::validation.phone'));
    }

}
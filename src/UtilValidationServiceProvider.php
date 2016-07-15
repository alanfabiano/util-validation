  <?php

namespace AlanMilani\UtilValidation;

use Illuminate\Support\ServiceProvider;
use Validator;


class UtilValidationServiceProvider extends ServiceProvider
{

    protected $create_message;


    public function boot()
    {

        Validator::extend('phone', 'UtilValidation@phone');

        // custom message for validation
        Validator::replacer('phone', function ($message, $attribute) {

            $this->create_message = "The $attribute it is not in a valid format.";

            return str_replace($message, $this->create_message, $message);

        });

    }

    public function register()
    {
        $this->app->bind('UtilValidation', 'AlanMilani\UtilValidation\UtilValidation');

    }
}

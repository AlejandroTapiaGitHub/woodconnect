<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //FORAMATO EMAIL
        Validator::extend('format_email', function($attribute, $value, $parameters, $validator){
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        });

        Validator::replacer('format_email', function ($message, $attribute, $rule, $parameters) {
            return "formato de $attribute incorrecto";
        });

        //COMPROBAR SI EL EMAIL EXISTE EN BBDD
        Validator::extend('exist_email', function($attribute, $value, $parameters, $validator){
            return User::where('email', $value)->exists();
        });

        Validator::replacer('exist_email', function ($message, $attribute, $rule, $parameters) {
            return "el $attribute introducido no existe";
        });

        //FORMATO PASSWORD
        Validator::extend('format_password', function($attribute, $value, $parameters, $validator){
            return preg_match('/(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).*/', $value);
        });

        Validator::replacer('format_password', function($message, $attribute, $rule, $parameters) {
            return 'La contraseña debe tener entre 4 y 12 caracteres e incluir al menos una letra mayúscula, un número y un carácter especial.';
        });
    }
}

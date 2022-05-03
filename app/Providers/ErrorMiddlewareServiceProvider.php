<?php


namespace App\Providers;


class ErrorMiddlewareServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->addErrorMiddleware(
            config('middleware.error_details.displayErrorDetails'),
            config('middleware.error_details.logErrorDetails'),
            config('middleware.error_details.logErrors')
        );
    }

    public function boot()
    {
        //require routes_path('web.php');
    }
}
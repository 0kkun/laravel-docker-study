<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use AppMyClassesMyServiceMakeWith;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        // app()->bind('App\MyClasses\MyService\MakeWith', function($app) {
        //     $myservicemakewith = new MyServiceMakeWith();
        //     $myservicemakewith->sendId(0);
        //     return $myservicemakewith;
        // });

        app()->bind('App\MyClasses\MyServiceInterface','App\MyClasses\MyServiceMakeWith');
    }
}

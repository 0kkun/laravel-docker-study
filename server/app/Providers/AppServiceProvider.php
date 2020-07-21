<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use AppMyClassesMyServiceMakeWith;

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

        // MyServiceInterfaceをbindで結合する。具体的な実装はMyServiceMakeWithクラスでやる。という意味。
        // app()->bind('App\MyClasses\MyServiceInterface','App\MyClasses\MyServiceMakeWith');

        // サービスの切替をしてみる
        // app()->bind('App\MyClasses\MyServiceInterface','App\MyClasses\PowerMyService');
    }
}

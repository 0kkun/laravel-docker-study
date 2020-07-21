<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{

    // サービスクラスの登録を行うところ
    public function register()
    {
        app()->bind('App\MyClasses\MyServiceInterface', 'App\MyClasses\PowerMyService');
        echo "<b><MyServiceProvider/register></b><br>";
    }

    // サービスクラスの初期化などを行うところ
    public function boot()
    {
        echo "<b><MyServiceProvider/boot></b><br>";
    }
}

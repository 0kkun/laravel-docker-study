<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyClasses\MyService;

// サービスコンテナの勉強用コントローラー
class ServiceStudyController extends Controller
{
    public function index()
    {
        # 引数無しでの取得
        $myservice = app('App\MyClasses\MyService'); //その1
        // $myservice = app()->make('App\MyClasses\MyService'); //その2
        // $myservice = resolve('App\MyClasses\MyService'); //その3
        $data = [
            'msg'  => $myservice->say(),
            'data' => $myservice->data()
        ];

        return view('ServiceStudy.index', $data);
    }
}
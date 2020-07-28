<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use App\Person;
use App\Jobs\MyJob;

// サービスコンテナの勉強用コントローラー
class ServiceStudyController extends Controller
{
    // //引数無しで作成したクラスのインスタンスを取得
    // public function index()
    // {
    //     # 引数無しでの取得
    //     $myservice = app('App\MyClasses\MyService'); //その1
    //     // $myservice = app()->make('App\MyClasses\MyService'); //その2
    //     // $myservice = resolve('App\MyClasses\MyService'); //その3
    //     $data = [
    //         'msg'  => $myservice->say(),
    //         'data' => $myservice->data()
    //     ];
    //     return view('ServiceStudy.index', $data);
    // }

    function __construct()
    {
    }
    
    // public function index()
    // {
        // $myservice->setId($id);
        // $data = [
        //     'msg' => $myservice->say($id),
        //     'data'=> $myservice->alldata()
        // ];

        // Eloquentを使ったデータ取得
        // $msg = 'show people record';
        // $result = Person::get();

        // $data = [
        //     'msg' => $msg,
        //     'data' => $result,
        // ];

        // ジョブを実行する
    //     MyJob::dispatch();
    //     $msg = 'show people record';
    //     $result = Person::get();

    //     $data = [
    //         'input' => '',
    //         'msg' => $msg,
    //         'data' => $result,
    //     ];

    //     return view('ServiceStudy.index', $data);
    // }

    public function json($id = -1)
    {
        if($id == -1) { 
            return Person::get()->toJson();
        } else {
            return Person::find($id)->toJson();
        }
    }

    public function index($id = null) {
        if ($id !== null) {
            $person = Person::find($id);
        } else {
            $person = null;
        }

        if ($person != null) {
            MyJob::dispatch($person);
        }

        $data = Person::all();

        return view('ServiceStudy.index', compact('data'));
    }
}

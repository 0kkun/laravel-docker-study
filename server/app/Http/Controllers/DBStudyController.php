<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBStudyController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->orderBy('age','asc')->get();

        return view('dbstudy.index', [ 'items' => $items ]);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $items = DB::table('people')->orderBy('age','asc')->get();

        return view('dbstudy.show', [ 'items' => $items ]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('dbstudy.index', ['items'=>$items]);
    }

    public function add(Request $request)
    {
        return view('dbstudy.add');
    }

    public function create(Request $request)
    {
        $param = [
            'username' => $request->username,
            'email' => $request->email,
            'age' => $request->age,
        ];
        DB::insert('insert into people (username, email, age) values (:username, :email, :age)', $param);
        return redirect('/dbstudy');
    }

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view( 'dbstudy.edit', [ 'form' => $item[0] ] );
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'username' => $request->username,
            'email' => $request->email,
            'age' => $request->age,
        ];
        DB::update('update people set username = :username, email = :email, age = :age where id = :id',$param);
        return redirect('/dbstudy');
    }
}

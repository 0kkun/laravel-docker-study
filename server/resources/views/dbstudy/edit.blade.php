
@extends('layouts.dbstudyapp')<!-- レイアウトの継承設定 -->
<!-- 以下、親のテンプレートレイアウトに値を渡している。 -->
@section('title','Edit')
@section('menubar')
  @parent
  Edit Page
@endsection
@section('content')

  <form action="/dbstudy/edit" method="post">
  <table>
    @csrf
    <tr>
      <!-- 更新するレコードを取得する -->
      <input type="hidden" name="id" value="{{$form->id}}">
      <th>username: </th>
      <td><input type="text" name="username" value="{{$form->username}}"></td>
    </tr>
    <tr>
      <th>email: </th>
      <td><input type="text" name="email" value="{{$form->email}}"></td>
    </tr>
    <tr>
      <th>age: </th>
      <td><input type="text" name="age" value="{{$form->age}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>

  </table>
  </form>

@endsection
@section('footer')<!-- footerセクションにテキストを渡している -->
  copylight 2020 okkun.
@endsection

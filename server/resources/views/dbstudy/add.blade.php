
@extends('layouts.dbstudyapp')<!-- レイアウトの継承設定 -->
<!-- 以下、親のテンプレートレイアウトに値を渡している。 -->
@section('title','Add')
@section('menubar')
  @parent
  Add Page
@endsection
@section('content')

  <form action="/dbstudy/add" method="post">
  <table>
    @csrf
    <tr>
      <th>username: </th>
      <td><input type="text" name="username" value="{{old('username')}}"></td>
    </tr>
    <tr>
      <th>email: </th>
      <td><input type="text" name="email" value="{{old('email')}}"></td>
    </tr>
    <tr>
      <th>age: </th>
      <td><input type="text" name="age" value="{{old('age')}}"></td>
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

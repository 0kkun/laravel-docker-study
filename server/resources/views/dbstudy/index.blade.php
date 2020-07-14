
@extends('layouts.dbstudyapp')<!-- レイアウトの継承設定 -->
<!-- 以下、親のテンプレートレイアウトに値を渡している。 -->
@section('title','Index')
@section('menubar')
  @parent
  Index Page
@endsection
@section('content')

@if($items != null)
  <table>
    <tr>
      <th>id:</th><th>username:</th><th>mail:</th><th>age:</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->username}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->age}}</td>
    </tr>
    @endforeach
  </table>
@endif

@endsection
@section('footer')<!-- footerセクションにテキストを渡している -->
  copylight 2020 okkun.
@endsection

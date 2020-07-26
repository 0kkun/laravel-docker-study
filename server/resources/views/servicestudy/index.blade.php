
@extends('layouts.dbstudyapp')
@section('title','Service Study')
@section('menubar')
  @parent
  Service Study Page
@endsection
@section('content')


  <ul>
    @foreach($data as $item)
        <li>{{ $item->username }}</li>
    @endforeach
  </ul>

@endsection
@section('footer')
  copylight 2020 okkun.
@endsection

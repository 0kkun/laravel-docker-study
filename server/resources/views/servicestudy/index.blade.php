
@extends('layouts.dbstudyapp')
@section('title','Service Study')
@section('menubar')
  @parent
  Service Study Page
@endsection
@section('content')


  <p>{!!$msg!!}</p>
  <ul>
  @foreach($data as $datum)
  <li>{!!$datum!!}</li>  
  @endforeach
  </ul>


@endsection
@section('footer')
  copylight 2020 okkun.
@endsection

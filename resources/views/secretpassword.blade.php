@extends('layouts.master')

@section('content')

  <div class="content subtitle">
  <img
    src='img/ninja.png'
    style='width:300px'
    alt='Intimidating Ninjas Will Protect Your Password'>
    <p>Coming to your internet soons...</p>
  </div>

  <div class="content m-b-md">

    <p>Your password is {{$secretPassword}}</p>

  </div>

@endsection

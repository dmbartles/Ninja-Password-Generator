@extends('layouts.master')

@section('content')

  <div class="content subtitle">
  <img
    src='img/ninja.png'
    style='width:300px'
    alt='Intimidating Ninjas Will Protect Your Password'>
    <p>Here are the ninja name components...</p>
  </div>



    @foreach($ninjaMoves as $title => $ninjaMoves)
      <div class="content">
        <p>  {{$title}} </p>
      </div>
    @endforeach


@endsection

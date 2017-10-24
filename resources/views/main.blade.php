@extends('layouts.master')

@section('content')

  <div class="content">
  <img
    src='img/ninja.png'
    style='width:300px'
    alt='Intimidating Ninjas Will Protect Your Password'>

    <h2>{{ $ninjaPassword }}</h2>

    <form method='GET' action=''>
      {{ csrf_field() }}
      <label for='numberSpecialChars'>Add Numbers and Special Characters</label>

      <input type='text' name='numberSpecialChars' id='numberSpecialChars'>

      <label><input type='radio' name='useCaps' value='Yes' checked> Capitalize First Letter </label>
      <label><input type='radio' name='useCaps' value='No'> All Lowercase Letters </label>


      <select name="seperator">
        <option value="-">Dash -</option>
        <option value="_">Underscore _</option>
        <option value=".">Dot .</option>
        <option value="~">Tilde ~</option>
        <option value="$">Dollar $</option>
        <option value="#">Hash #</option>
        <option value="%">Percent %</option>
        <option value="@">At @</option>
      </select>

      <input type='submit' value='makePassword'>

    </form>
  </div>


  <div class="content links m-b-md">
      <a href="http://p1.kodiakjetpack.club">About Me</a>
      <a href="http://p2.kodiakjetpack.club">Baby Names</a>
      <a href="http://p3.kodiakjetpack.club">Passwords</a>
  </div>

@endsection

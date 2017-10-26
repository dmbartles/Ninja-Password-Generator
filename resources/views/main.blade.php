@extends('layouts.master')

@section('content')

  <div class="content m-b-md">

    <h2>{{ $ninjaPassword }}</h2>

    <form method='GET' action=''>
      {{ csrf_field() }}
      <label for='numberSpecialChars'>Add Numbers and Special Characters</label>
      <input type='text' name='numberSpecialChars' id='numberSpecialChars' maxlength='4' size='4' value='{{ $numberSpecialChars }}'>

      <br>

      <label><input type='radio' name='useCaps' value='Yes' checked='Checked'> Capitalize First Letter </label>
      <label><input type='radio' name='useCaps' value='No' > All Lowercase Letters </label>

      <br>

      <label for='seperator'>Choose a seperator</label>
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

      <br>

      <input type='submit' value='Submit'>

    </form>
  </div>

@endsection

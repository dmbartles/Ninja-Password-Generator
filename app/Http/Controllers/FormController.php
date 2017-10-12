<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

  public function index($length,$weapons) {
    return 'here are your selections '.$length.', '.$weapons;
  }

  public function show($secretPassword) {
    $secretPassword = 'iwonttellyou';
    return 'Your password is '.$secretPassword;
  }


}

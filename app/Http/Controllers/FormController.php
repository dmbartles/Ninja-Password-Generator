<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

  public function index() {

    $jsonPath = database_path('ninjamoves.json');
    $ninjaMovesJson = file_get_contents($jsonPath);
    $ninjaMoves = json_decode($ninjaMovesJson, true);

    return view('ninjamoves')->with(['ninjaMoves' => $ninjaMoves]);

  }

  public function show($secretPassword) {

    return view('secretpassword')->with(['secretPassword' => $secretPassword]);

  }


}

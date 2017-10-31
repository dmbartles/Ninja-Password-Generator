<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

  public function ninjaPassword(Request $request)
  {

    ## Get JSON database of ninja moves
    $jsonPath = database_path('ninjamoves.json');
    $ninjaMovesJson = file_get_contents($jsonPath);
    $ninjaMoves = json_decode($ninjaMovesJson, true);

    ## Get JSON database of ninja quotes
    $jsonPath = database_path('ninjaqoutes.json');
    $ninjaQoutesJson = file_get_contents($jsonPath);
    $ninjaQoutes = json_decode($ninjaQoutesJson, true);

    ## Set up validation
    $this->validate($request, [
      'numberSpecialChars' => 'max:4'
    ]);

    ## Get user inputs
    $ninjaSeperator = $request->input('seperator');
    $numberSpecialChars = $request->input('numberSpecialChars');
    $useCaps = $request->input('useCaps');

    ## Generate Password
    $ninjaAdverb = $ninjaMoves['adverb'][rand(1,count($ninjaMoves['adverb'])) - 1];
    $ninjaNoun = $ninjaMoves['noun'][rand(1,count($ninjaMoves['noun'])) - 1];
    $ninjaBodypart = $ninjaMoves['bodypart'][rand(1,count($ninjaMoves['bodypart'])) - 1];
    $ninjaVerb = $ninjaMoves['verb'][rand(1,count($ninjaMoves['verb'])) - 1];


    $ninjaPassword = $ninjaAdverb
    .$ninjaSeperator
    .$ninjaNoun
    .$ninjaSeperator
    .$ninjaBodypart
    .$ninjaSeperator
    .$ninjaVerb
    .$numberSpecialChars;

    $ninjaQoute = $ninjaQoutes['play'][rand(1,count($ninjaQoutes['play'])) - 1];

    if (is_null($request->input('_token'))) {
      $ninjaPassword = 'Choose Your Destiny!!!';
      $ninjaQoute = $ninjaQoutes['start'][rand(1,count($ninjaQoutes['start'])) - 1];
    }



    if (is_null($request->input('useCaps'))) {
      $useCaps = 'Yes';
    }

    if ($useCaps == 'Yes') {
      $ninjaPassword = ucwords($ninjaPassword, "$ninjaSeperator");
    };

    return view('main')->with(['ninjaPassword' => $ninjaPassword,
    'ninjaSeperator' =>$ninjaSeperator,
    'numberSpecialChars' =>$numberSpecialChars,
    'useCaps' =>$useCaps,
    'ninjaQoute' => $ninjaQoute
  ]);
}


}

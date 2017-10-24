<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

  public function ninjaPassword(Request $request)
  {

    ## Get JSON database of ninamoves
    $jsonPath = database_path('ninjamoves.json');
    $ninjaMovesJson = file_get_contents($jsonPath);
    $ninjaMoves = json_decode($ninjaMovesJson, true);

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

      if ($useCaps == 'Yes') {
        $ninjaPassword = ucwords($ninjaPassword, "$ninjaSeperator");
      };

      return view('main')->with(['ninjaPassword' => $ninjaPassword]);
  }


}

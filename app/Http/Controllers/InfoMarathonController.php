<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InfoMarathon;

class InfoMarathonController extends Controller
{
    //
    public function searchMarathons(Request $request)
    {
      $lat = $request ->lat;
      $lng = $request ->lng;

      $marathons = InfoMarathon::all();

      return $marathons;
      
    }
}

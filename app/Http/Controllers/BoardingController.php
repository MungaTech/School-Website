<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardingController extends Controller
{
  //Show Boarding
  public function boarding()
  {
      return view('pages.boarding');
  }
}

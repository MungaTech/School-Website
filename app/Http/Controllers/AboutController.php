<?php

namespace App\Http\Controllers;
use App\Models\About;


use Illuminate\Http\Request;

class AboutController extends Controller
{
   //Show About
    public function about()
    {
        return view('pages.about');
    }
}

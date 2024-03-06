<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MTCController extends Controller
{
   public function index ()
   {
    return view('mtc.main')->with( ['user' => Auth::user()]);
   }

   public function formmingguan ()
   {
      return view('mtc.mainform')->with( ['user' => Auth::user()]);
   }
}

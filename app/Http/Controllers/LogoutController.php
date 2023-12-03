<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LogoutController extends Controller
{
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login')->with('success', 'Logout Succesful');
    }
}

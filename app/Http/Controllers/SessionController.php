<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionController extends Controller
{
    public function logOut(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    public function login()
    {
        return view('views.login');
    }
    
}

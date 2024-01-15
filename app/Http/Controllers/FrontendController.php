<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function welcome(){
        return view('frontend.index');
    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}

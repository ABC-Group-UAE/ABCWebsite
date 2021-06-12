<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userIndexController extends Controller
{
    //
    function indexlogin(){
        return view('Admin.login');
    }
}

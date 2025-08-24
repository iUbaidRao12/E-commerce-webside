<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function admin(){
        return view('admin.dashboard');
    }
}

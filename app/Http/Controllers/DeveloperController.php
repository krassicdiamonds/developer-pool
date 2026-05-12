<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    // define your route handlers in this class

    // show all. Path = ('/')
    public function showAll (){
        return view('developers.index');
    }
}

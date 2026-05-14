<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    // define your route handlers in this class

    // show all. Path = ('/')
    public function showAll (){
        // get all developer records
        $developers = Developer::all();

        return view('developers.index', ['developers' => $developers]);
    }

    public function addNew (){
        return view('developers.add');
    }
}

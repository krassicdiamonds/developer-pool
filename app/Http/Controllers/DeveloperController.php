<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    // define your route handlers in this class

    // show all. Path = ('/')
    public function showAll (){
        // get all developer records
        $developers = Developer::with('company')->orderBy('created_at', 'desc')->paginate(4);

        return view('developers.index', ['developers' => $developers]);
    }

    public function showDetails (string $id) {
        // Load developers together with their related companies to prevent lazy loading which is querying from the views
        $developer = Developer::with('company')->findOrFail($id);

        return view('developers.show', ['developer' => $developer]);
    }

    public function addNew (){
        $companies = Company::all();

        return view('developers.add', ['companies' => $companies]);
    }

    // Request => type, $request => route parameter
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'string|min:3|max:100|required',
            'role' => 'string|min:3|max:100|required',
            'email' => 'string|required',
            'experience' => 'integer|min:0|max:30|required',
            'description'=>'string|min:10|max:255|required',

            // the selected option has an ID that actually exists in the company table, specifically in the ID column
            'company_id' => 'required'
        ]);

        Developer::create($validatedData);

        return redirect()->route('developers.index');
    }

    public function destroy($id){
        Developer::delete($id);

        return redirect()->route('developers.index');
    }
}

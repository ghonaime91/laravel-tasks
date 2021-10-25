<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    

    // view the form page
    public function create()
    {
        return view('form');
    }

    // action 
    public function store(Request $req)
    {
        
        $this->validate($req,[
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required|min:6",
            "address" => "required|size:10",
            "gender" => "required|in:male,female",
            "linkedin" => "required|url"
        ]);
        echo "Valid data";
        
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentContrpller extends Controller
{
    public function index()
    {
        return view('student');
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());

    }
}

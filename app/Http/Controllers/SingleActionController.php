<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    public function _invoke(Request $request)
    {
        return view('courses');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('form1');
    }

    public function store(Request $request)
    {
        
        echo "<pre>";
        print_r($request->all());

        $employee = new Employee;
        $employee->name = $request['name'];
        $employee->email = $request['email'];
        $employee->city = $request['city'];
        $employee->state = $request['state'];
        $employee->gender = $request['gender'];
        $employee->address = $request['address'];
        $employee->dob = $request['dob'];
        $employee->password = md5($request['password']);
        $employee->save();
    }
}

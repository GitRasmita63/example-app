<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    
    {
        return view('form2');
    }

    public function store(Request $request)
    {
        

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer');
    }

     public function view()
    {
        $customers = Customer::all();

        $data = compact('customers');
      return view('customer-view');
    }

    // public function delete($id)
    // {
    //    $customer = Customer::find($id)->delete();
    //    return redirect()->back();
    // }

}

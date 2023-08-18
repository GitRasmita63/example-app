<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\RegistrationController;
use App\Models\mamun;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/{name?}', function ($name = null) {
//     $demo = "<h2>good evening everyone</h2>";
//     $data = compact('name','demo');
//     return view('home')->with($data);
// });


// Route::get('/',[DemoController::class, 'index']);
// Route::get('/anout','App\Http\controllers\DemoController@ about');
// Route::get('/courses', SingleActionController::class);


Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class,'register']);




// Route::get('/mamun', function(){
// $mamun = mamun::all();
// echo"<pre>";
// print_r($mamun->toArray());
// });


Route::get('/employee',[EmployeeController::class, 'index']);
Route::post('/employee',[EmployeeController::class,'store']);



// Route::get('/customer',[CustomerController ::class, 'index']);
Route::post('/customer/add',[CustomerController ::class,'store']);

Route::get('/customer',[CustomerController ::class,'view']);
Route::get('/customer/create',[CustomerController::class,'create']);

Route::get('/customer/edit',[CustomerController ::class,'edit']);
Route::post('/customer/update',[CustomerController ::class,'customer_update']);



Route::get('/customer/delete/{id}',[CustomerController::class,'delete']);



Route::get('/',function(){
    return view('index');
});
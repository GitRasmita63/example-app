<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer view page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#" style="color:white;">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav mt-2 mt-lg-0 ms-5">
            <li class="nav-item">
               <a class="nav-link"  href="{{url('/')}}" style="color:white;">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('/register')}}" style="color:white;">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/customer')}}" style="color:white;">Customer</a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="{{url('/employee')}}" style="color:white;">Employee</a>
            </li>
         </ul>
     </div>
    </div>
 </nav>


    <div class="container">
       <a href="{{url('/customer/create')}}">
      <button class="btn btn-primary d-inline m-2 float-right">Add</button>
      </a>
        <table class="table">
          <thead>
            <tr>
               <th>Name</th> 
               <th>Email</th> 
               <th>Address</th>
               <th>Gender</th> 
               <th>DOB</th> 
               <th>Status</th> 
            </tr>
          </thead>
          <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>
                    @if($customer->gender == "F")
                    Female
                    @elseif($customer->gender == "M")
                    Male
                    @else
                    Other
                    @endif
                </td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->status}}</td>
                <td>
                <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}">
                <button class="btn btn-danger">Delete</button>
               </a>
               <a href="{{url('/customer/edit/')}}">
                <button class="btn btn-primary">Edit</button>
                </a>
               </td>
            </tr>
            @endforeach
          </tbody>
          
        </table>
    </div>

</body>
</html>
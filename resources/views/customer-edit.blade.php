<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .required label::after {
      content: "*";
      color: red;
    }
  </style>
</head>
<body class="bg-dark">
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

  <form action="{{url('/')}}/customer/update" method="post">
    @csrf
    <div class="container mt-4 card p-5 bg-white">
      <h2 class="text-center">Customer Registration Form</h2>
      <div class="row">
        <div class="form-group col-md-6  required">
          <label for="" class="form-label">Name:</label>
          <input type="text" name="name" id="" class="form-control" placeholder="">
          <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>
        </div>


        <div class="form-group col-md-6 required">
          <label for="" class="form-label">Email:</label>
          <input type="email" name="email" id="" class="form-control" placeholder="">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>
        </div>


        <div class="form-group col-md-6 required">
          <label for="" class="form-label">Password:</label>
          <input type="password" name="password" id="" class="form-control" placeholder="">
          <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
          </span>
        </div>


        <div class="form-group col-md-6 required">
          <label for="" class="form-label">Confirm Password:</label>
          <input type="password" name="password_confirmation" id="" class="form-control" placeholder="">
          <span class="text-danger">
            @error('password_confirmation')
            {{$message}}
            @enderror
          </span>
        </div>


        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" name="address" class="form-control" id="" placeholder="" style="height: 80px">
        </div>

        <div class="form-group col-md-6 required">
          <label for="" class="form-label">Date of birth</label>
          <input type="date" name="dob" id="" class="form-control" placeholder="" value="" >
          <span class="text-danger ">

            @error('date')
            {{$message}}
            @enderror
          </span>
        </div>


        <div class="form-group col-md-6 p-3 required">
          <label for="" class="form-label">Gender :</label>

          <div class="form-check form-check-inline">
            <label class="form-check-label" for="">M</label>
            <input type="radio" class="form-check-input" name="gender" id="" value="M">
          </div>

          <div class="form-check form-check-inline">
            <label class="form-check-label" for="">F</label>
            <input type="radio" class="form-check-input" name="gender" id="" value="F">
          </div>

          <div class="form-check form-check-inline">
            <label class="form-check-label" for="">O</label>
            <input type="radio" class="form-check-input" name="gender" id="" value="O">
          </div>

          <span class="text-danger">
            @error('gender')
            {{$message}}
            @enderror
          </span>
        </div>

        <button class="btn btn-primary mt-4"> Update </button>

      </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form creat</title>
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
  <form action="{{url('/')}}/employee" method="post">
    @csrf
    <div class="container mt-4 card p-5 bg-white">
      <h2 class="text-center">Student Registration Form</h2>
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


        <div class="form-group col-md-6 required">
          <label for="" class="form-label">City</label>
          <input type="text" name="city" id="" class="form-control" placeholder="" value="Bhubaneswara">
          <span class="text-danger">
            @error('city')
            {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group col-md-6  required">
          <label for="" class="form-label">State</label>
          <input type="text" name="state" id="" class="form-control" placeholder="" value="Odisha">
          <span class="text-danger">
            @error('state')
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

        <button class="btn btn-primary mt-4"> Submit </button>

      </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons using routs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:white;">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav ">
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

</body>
</html>
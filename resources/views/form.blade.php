<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- <style>
        #abc{
         width:50%;
         
        }
        #eml{
         width:50%;
         
        }
        #psw{
         width:50%;
         
        }
        #pswd{
         width:50%;
         
        }
        form{
         margin-left:100px;
        }
    </style> -->
</head>
<body>
    <form action="{{url('/')}}/register" method="post">
      @csrf
      
     <div class="container">
        <h1 class="text-center">Registration</h1>
        <x-input type="text" name="name" label="please enter your name"/>
        <x-input type="email" name="email" label="please enter your email"/>
        <x-input type="password" name="password" label="please enter your password"/>
        <x-input type="password" name="password_confirmation" label="please enter your confirm password"/>
        <button class="btn btn-primary"> Submit </button>
        </div>

     
    
</div>
</form>
</body>
</html>

















     <!-- <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" id="eml" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
         @error('email')
              {{$message}}
         @enderror
       </span>
     </div>
     <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="psw" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
         @error('password')
              {{$message}}
         @enderror
       </span>
     </div>
     <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" name="password_confirmation" id="pswd" class="form-control" placeholder="" aria-describedby="helpId">
        <span class="text-danger">
         @error('password_confirmation')
              {{$message}}
         @enderror
       </span>
     </div> -->
     <!-- <br>
     <button class="btn btn-primary">
        Submit
     </button>
</div>
</form>
</body>
</html> -->


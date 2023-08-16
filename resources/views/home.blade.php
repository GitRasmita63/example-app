<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>welcome,{{date('d-m-y')}}
        @isset($name)
          Hii {{$name}}
        @endisset
    </h1>


    <!-- {!!$demo!!} -->


    <!-- @if($name == "")
        {{"Name is  empty"}}
    @elseif($name == "rasmita")
        {{"Name is correct"}}
    @else
        {{"Name is incorrect"}}
@endif -->


    <!-- @unless($name == "Rasmita")
    The name is not Rasmita
    @endunless -->


    <!-- <div class="container">
    @for ($i = 1; $i<10; $i++)
       <h2>
        {{$i}}
      </h2> 
    @endfor
</div> -->



</body>
</html>
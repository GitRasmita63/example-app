<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.main')
@push('title')
     <title>Home</title>
     @endpush
     @section('main-section')
     <h1  class="text-center">
       Home page
     </h1>
     @endsection
</body>
</html>
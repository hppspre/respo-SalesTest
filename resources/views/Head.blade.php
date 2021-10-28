<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practical Test</title>
    
    {{-- Used boostrap framework --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>


    @yield('SalesTeam') 
    @yield('AddNew') 
    @yield('update') 


@include('Footer')
    


    

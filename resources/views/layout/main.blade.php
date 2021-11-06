<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
</head>
<body>
@include('layout.nav')

<div class="container mt-3 p-4">

    <div class="container test">
        @yield('form')
    </div>
</div>

    <div class="container test2 mt-4 mb-4 table-responsive">
        @yield('table')
    </div>





</body>
</html>



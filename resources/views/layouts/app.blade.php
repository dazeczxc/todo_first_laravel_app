<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom Css -->
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
 
    <!-- Vue Js -->
      <script src="{{ mix('resources/js/app.js') }}"></script>



    <style>
        body {
            font-family: 'Nunito';
         }
    </style>
</head>

<body id="app">

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="/"><span class="navbar-brand mb-0 h1">Todo</span></a>
        <a href="/create"><span class="btn btn-primary">Create Todo</span></a>
    </div>
</nav>

<div  class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">

            {{ session()->get('success') }}

        </div>
    @endif
    
    @yield('content')

    
</div>

<example-component />

</body>

</html>
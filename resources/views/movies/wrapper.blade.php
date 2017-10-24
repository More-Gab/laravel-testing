<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body class="bg-warning">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="{{url('movies')}}">Homepage</a></li>
            <li class="nav-item"><a class="nav-link" href="{{action('movieController@listing')}}">List</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('movies detail', ['id' => 1])}}">Detail</a></li>
            <li class="nav-item"><a class="nav-link" href="{{action('movieController@create')}}">New</a></li>
        </ul>
    </nav>

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message')}}
        </div>
    @endif

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    @yield('css')
</head>
<body>

<section class="header">
    <div>
        @yield('section_header')
    </div>
</section>

<section class="description">
    <div>
        @yield('section_description')
    </div>
</section>

@include ('menu')

</body>
</html>
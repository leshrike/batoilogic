<!DOCTYPE html>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<html>
    <head>
            <title>@yield('titulo')</title>
    </head>
    <body>
            @include('partials.nav')
            @yield('contenido')
    </body>     
    <footer>
           @include('partials.footer')
    </footer>

</html>


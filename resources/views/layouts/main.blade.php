<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics - Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </body>
    
</html>
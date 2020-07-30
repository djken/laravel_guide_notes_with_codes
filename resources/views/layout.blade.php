<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Script -->
        <script src="{{ asset('js/app.js') }}" defer></script>
   
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact-us">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customers">Customers</a>
            </li>
        </ul>
          
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

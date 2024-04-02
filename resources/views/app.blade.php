<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body class="border vh-100">
        @include('layouts.header')

        @include('layouts.svg')

        <main class="d-flex flex-nowrap border" style="height:100%;">

            <div class="d-flex flex-column text-bg-dark p-3" @style("width: 280px;")>
                <p class="align-midle mb-0">Menu</p>
                <hr>
                <ul class="nav nav-pills flex-column">
                    <li>
                        
                        <a href="" class="nav-link text-white align-middle">
                            <svg class="pe-none me-2" width="16" height="16" style="fill:currentColor;"><use xlink:href="#home"/></svg>
                            Item</a>
                    </li>
                    <li>
                        
                        <a href="" class="nav-link text-white align-middle">
                            <svg class="pe-none me-2" width="16" height="16" style="fill:currentColor;"><use xlink:href="#home"/></svg>
                            Item</a>
                    </li>
                    <li>
                        
                        <a href="" class="nav-link text-white align-middle">
                            <svg class="pe-none me-2" width="16" height="16" style="fill:currentColor;"><use xlink:href="#home"/></svg>
                            Item</a>
                    </li>
                    <li>
                        
                        <a href="" class="nav-link text-white align-middle">
                            <svg class="pe-none me-2" width="16" height="16" style="fill:currentColor;"><use xlink:href="#home"/></svg>
                            Item</a>
                    </li>
                </ul>
            </div>

            @yield('content')
        </main>
    </body>
</html>

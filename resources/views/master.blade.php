<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> -->

    </head>
    <body>
      <div class="container">
        @include('components.navbar')
        @yield('content')
      </div>
    </body>
</html>

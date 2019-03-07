<?php

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <title>{{config('app.name', 'Card Collector')}}</title>
  </head>
  <body>
    <div class="container">
      @include('partials.navbar')
      @yield('content')
    </div>
  </body>
</html>

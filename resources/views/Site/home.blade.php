@extends('master/master')

@section('title', 'Site Name - Home Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>HOME PAGE</h2>
  <p>INTRO PIC</p>
  <a href="login">LOGIN</a>
  <a href="register">REGISTER</a>
  </br>
  <a href="index">BROWSE</a>
  <a href="search">SEARCH</a>
@endsection

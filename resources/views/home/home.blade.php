@extends('master/master')

@section('title', 'Site Name - Home Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>HOME PAGE</h2>
  <p>INTRO PIC</p>
  <a href="/CardCollection/public/login">LOGIN</a>
  <a href="/CardCollection/public/register">REGISTER</a>
  </br>
  <a href="/CardCollection/public/browse">BROWSE</a>
  <a href="/CardCollection/public/search">SEARCH</a>
@endsection

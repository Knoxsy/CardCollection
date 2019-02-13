@extends('master')

@section('title', 'home')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h1>HOME PAGE</h1>
  <p>INTRO PIC</p>
  <a href="/CardCollection/public/register">REGISTER</a>
  <a href="/CardCollection/public/login">LOGIN</a>
@endsection

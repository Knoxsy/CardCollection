@extends('master/master')

@section('title', 'Site Name - Set Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <div>
    <div>Random Card Image</div>
    <div>
      <h2>1989 Topps</h2>
      

@include('partials.collection_navbar')
@endsection

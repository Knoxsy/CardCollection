@extends('master/master')

@section('title', 'Site Name - Collection Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>DATABASE COLLECTIONS</h2>
  <div>
    <div>Random image from set if available</div>
    <div>Set Year & Brand</div>
    <div>Total cards:</div>
  </div>


This Nav Bar will be removed eventually
@include('partials.collection_navbar')
@endsection

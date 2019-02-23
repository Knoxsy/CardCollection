@extends('master/master')

@section('title', 'Site Name - Collection Page')

@section('content')
  <h2>DATABASE COLLECTION VIEW</h2>
  <div>
    <div>Random image from set if available</div>
    <div>Set Year & Brand</div>
    <div>Total cards:</div>
  </div>


  <br />
  <br />
This Nav Bar will be removed eventually
@include('partials.collection_navbar')
@endsection

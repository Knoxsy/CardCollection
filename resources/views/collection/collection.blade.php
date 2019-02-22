@extends('master/master')

@section('title', 'loggedin_collection')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>DATABASE COLLECTIONS</h2>
  <div>
    <div>1987 Topps Baseball</div>
    <div>Total cards:</div>
  </div>
  <div>
    <div>1989 Topps Baseball</div>
    <div>Total cards:</div>
  </div>
@include('partials.collection_navbar')
@endsection

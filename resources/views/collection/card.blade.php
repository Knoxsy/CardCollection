@extends('master/master')

@section('title', 'Site Name - Card Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>CARD VIEW PAGE</h2>
  <div>Set Year and Brand</div>
  <div>Card image for Specific card or filler card</div>
  <div>Card number and Name</div>

@include('partials.collection_navbar')
@endsection

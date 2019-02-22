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
      <h2>Set Year and Brand</h2>
    </div>
    <div>Total cards:</div>
    <div>CHECKLIST</div>
    card 1<br>
    card 2<br>
    card 3...<br>



@include('partials.collection_navbar')
@endsection

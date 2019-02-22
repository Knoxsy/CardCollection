@extends('master/master')

@section('title', 'Site Name - Browse Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
<h1>BROWSE PAGE</h1>
<div>
  <h2>GENRE</h2>
  @foreach($set as $set)
    <!-- need to filter out duplicates pluck or unique possibly -->
      <a href="browse/{{$set->genre}}.php">{{$set->genre}}</a> |
  @endforeach
  <h2>YEAR</h2>
    <p>Need another
  <h2>BRAND</h2>
  <!--  <h2>Name</h2>
  <h2>Team</h2> -->
</div>
<!-- Running multiple functions on page gtting errors  -->

This Nav Bar will be removed eventually
@include('partials.collection_navbar')
@endsection

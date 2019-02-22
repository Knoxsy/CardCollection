@extends('master')

@section('title', 'Browse Page')


@section('content')
  <h1>BROWSE PAGE</h1>
  <div>
    <h2>GENRE</h2>
    @foreach($items as $item)
      <!-- need to filter out duplicates pluck or unique possibly -->
        <a href="browse/{{$set->genre}}.php">{{$set->genre}}</a> |
    @endforeach
    <h2>YEAR</h2>
    <h2>BRAND</h2>
    <!--  <h2>Name</h2>
    <h2>Team</h2> -->
  </div>
  <!-- Running multiple functions on page gtting errors  -->

@endsection

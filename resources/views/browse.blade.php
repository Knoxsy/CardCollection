@extends('master')

@section('title', 'browse')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h1>BROWSE PAGE</h1>
  @foreach($set as $set)
    <div>
      <p>{{$set->genre}}</p>
    </div>
    <div>
      <p>{{$set->year}}</p>
    </div>
    <div>
      <p>{{$set->brand}}</p>
    </div>
  @endforeach

@endsection

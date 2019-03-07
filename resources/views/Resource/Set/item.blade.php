@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
  <h3>{{$set->year}} {{$set->brand}}</h3>
  <br />
  Count: {{$set->count}}
  @yield('checklist')
@endsection

@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
  <h2>ALL SET VIEW PAGE</h2>
  <ul>
  @foreach($items as $item)
    <a href="/CardCollection/public/set/{{$item->id}}">
      {{$item->year}}
      {{$item->brand}}
      {{$item->genre}}
    </a>
    <br />
  @endforeach
  </ul>
@endsection

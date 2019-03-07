@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
  <h3>SINGLE CARD VIEW PAGE</h3>
  <img src="{{$card->front_image}}" height="300" width="200" /><br />
  #{{$card->card_number}}&nbsp &nbsp{{$card->name}}
@endsection

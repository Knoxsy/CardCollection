@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
  <h3>SINGLE CARD VIEW PAGE</h3>
  <img src="{{$card->front_image}}" height="300" width="200" /><br />
  #{{$card->card_number}}&nbsp &nbsp{{$card->name}}
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts3">Add to My Collection

  </button>
@endsection

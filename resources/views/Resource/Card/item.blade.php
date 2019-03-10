@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
  <h3>SINGLE CARD VIEW PAGE</h3>
  <div>
    <a href="{{$card->card_id}}"><img src="{{asset('photos/buttons/previous_button.png')}}" height="75px" /></a>
    <img src="{{$card->front_image}}" height="350" width="250" />
    <a href="{{$card->card_id}}"><img src="{{asset('photos/buttons/next_button.png')}}"  height="75px" /></a>
  </div>
  <div>
    <h6>#{{$card->card_number}}&nbsp &nbsp{{$card->name}}</h6>
  </div>

  @auth
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-color--light-green-900">
      <i class="material-icons">add</i>
    </button>
  </div>
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
      <i class="material-icons">remove</i>
    </button>
  </div>

  @else
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-color--green-900" disabled>
      <i class="material-icons">add</i>
    </button>
  </div>
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored mdl-color--red-900" disabled>
      <i class="material-icons">remove</i>
    </button>
  </div>
  @endauth

@endsection

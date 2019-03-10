@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
<link rel="stylesheet" href="{{asset('public/css/style.css')}}">

  <h5>#{{$card->card_number}}&nbsp{{$card->name}} ~ {Set Name}</h5>

  <div>
    <a href="{{$card->card_id}}" id="previous">
      <img src="{{asset('photos/buttons/previous_button.png')}}"height="75px" />
    </a>
    <img src="{{$card->front_image}}" height="350" width="250" />
    <a href="{{$card->card_id}}" id='next'>
      <img src="{{asset('photos/buttons/next_button.png')}}" height="75px" />
    </a>
  </div>


  @auth
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored
    mdl-color--light-green-900" id="add">
      <i class="material-icons">add</i>
    </button>
  </div>
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored
    mdl-color--red-900" id="remove">
      <i class="material-icons">remove</i>
    </button>
  </div>
  <div>
    <img src="{{asset('photos/buttons/have_star.png')}}" width="60px"/>
  </div>

  @else
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored
    mdl-color--light-green-900" id="add" disabled>
      <i class="material-icons">add</i>
    </button>
  </div>
  <div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored
    mdl-color--red-900" id="remove" disabled>
      <i class="material-icons">remove</i>
    </button>
  </div>

  @endauth

  <script>

  </script>

@endsection

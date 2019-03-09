@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')

<ul>
  @foreach($cards as $card)
  <li>
    {{$card->card_number}},
    {{$card->name}}
  </li>
  @endforeach
</ul>

  <h1>
  {{$set->genre}}:
</h1>
  <h2>
  {{$set->year}}
  {{$set->brand}}
</h2><br />
Count: {{$set->count}}

<ul>

<li>

<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>

  <span class="mdl-checkbox__label">{{$set->cards}}</span>
</label>
</li>

</ul>

@endsection

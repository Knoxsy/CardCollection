@extends('master/master')

@section('title', 'Cardboard Gems - Set View Page')

@section('content')
  <h3>{{$set->year}} {{$set->brand}}</h3>
  <br />
  Count: {{$set->count}}
  @yield('checklist')
@endsection

  <h1>
  {{$item->genre}}:
</h1>
  <h2>
  {{$item->year}}
  {{$item->brand}}
</h2>

<ul>

<li>

<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
  <span class="mdl-checkbox__label">{{$item->cards}}</span>
</label>
</li>
</ul>

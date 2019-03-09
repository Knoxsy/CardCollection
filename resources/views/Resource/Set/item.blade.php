@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')

<div>
  <h4>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->genre}}</h4><br />
  <span>Count: {{$set->count}}</span>
</div>

<table width="350px" border>
  <thead>
    <tr>
      <th width="50px">Have</th>
      <th width="50px">Card #</th>
      <th width="250px">Name</th>
    </tr>
  </thead>

  <tbody>
    @foreach($cards as $card)
    <tr>
      <td><input type="checkbox"></td>
      <td><a href="{{route('card.show', $card->id)}}">{{$card->card_number}}</a></td>
      <td><a href="{{route('card.show', $card->id)}}">{{$card->name}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

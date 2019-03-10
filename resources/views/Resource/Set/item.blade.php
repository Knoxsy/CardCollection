@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div>
  <h4>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->genre}}</h4><br />
  <span class="setCount">Count: {{$set->count}}</span>
</div>

<!-- <table width="350px" border> -->
    <tr>
      <table width="550px" align="center">
      <th class="haveOnSet" width="550px">Have</th>
      <table class=" mdl-js-data-table mdl-data-table--selectable " width="550px" align="center">
        <thead>
      <th width="150px">Card #</th>
      <th width="350px">Name</th>
    </tr>
  </thead>

  <tbody>
    @foreach($cards as $card)
    <tr>
      <!-- <td class=" mdl-js-data-table mdl-data-table--selectable "></td> -->
      <td style="center"><a href="{{route('card.show', $card->id)}}" >{{$card->card_number}}</a></td>
      <td><a href="{{route('card.show', $card->id)}}">{{$card->name}}</a></td>
    </tr>
    @endforeach
  </tbody>
<!-- </table> -->
</table>
</table>
@endsection

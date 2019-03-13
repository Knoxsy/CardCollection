@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="set_header">
  <h3>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->genre}}</h3><br />
  <span class="setCount">Count: {{$set->count}}</span>
</div>

  <div class="checklist">

    <table class="mdl-js-data-table mdl-data-table--selectable" width="550px" align="center">
      <thead>
        <th width="150px">Card #</th>
        <th width="350px">Name</th>
      </thead>
      <tbody>
        @foreach($cards as $card)
        <tr>
          <td>
            <span class="card">{{$card->card_number}}</span>
          </td>
          <td>
            {{$card->name}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


  <div class="showcard">
    @foreach ($cards as $card)
      <div>
        <img src="{{$card->front_image}}" height="350" width="250" />
      </div>
      <h5>#{{$card->card_number}}&nbsp{{$card->name}}</h5>
    @endforeach
  </div>

      <!-- <div>
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
      </div> -->


@endsection

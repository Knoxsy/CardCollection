@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="set_header">
  <h3>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->genre}}</h3><br />
  <span class="setCount">Count: {{$set->count}}</span>
</div>

<<<<<<< HEAD
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
      <td><a href="{{route('showcard', $card->id)}}">{{$card->name}}</a></td>
    </tr>
=======

<body>

  <div class="checklist">
    <table class="mdl-js-data-table mdl-data-table--selectable" width="550px" align="center">
      <thead>
        <th width="150px">Card #</th>
        <th width="350px">Name</th>
      </thead>
      <tbody>
        @foreach($cards as $card)
        <tr>
          <td class="tablinks" onmouseover="openCard(event, '{{$card->id}}')">
            {{$card->card_number}}
          </td>
          <td class="tablinks" onmouseover="openCard(event, '{{$card->id}}')">
            {{$card->name}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @foreach ($cards as $card)
  <div id="{{$card->id}}" class="tabcontent">
      <img src="{{$card->front_image}}" height="350" width="250" />
    <h5>#{{$card->card_number}}&nbsp{{$card->name}}</h5>
  </div>
  @endforeach
  <div class="clearfix"></div>

<script>
function openCard(evt, id) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(id).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>




  <!-- <div class="checklist">
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
  </div> -->


  <div class="showcard">
    @foreach ($cards as $card)
      <div>
        <img src="{{$card->front_image}}" height="350" width="250" />
      </div>
      <h5>#{{$card->card_number}}&nbsp{{$card->name}}</h5>
>>>>>>> jsc_dev
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

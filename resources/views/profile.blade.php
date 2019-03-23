@extends('master/master')

@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
  <div>
    <h5>{{ Auth::user()->name }}, welcome to your collection!</h5>
      <!-- @if($errors->any())
      <h4>{{$errors->first()}}</h4>
      @endif -->

  </div>
<h1>HELLO</h1>


<pre>
mycards count: {{$mycards->count()}}


<!-- @foreach($sets as $set)
@endforeach -->

@foreach($mycards as $mycard)
  mycard: {{$mycard->condition}}
@endforeach
@foreach($cards as $card)
  CARD: {{$card->name}}
@endforeach

@foreach($sets->where('genre', 'Basketball') as $basketball)
  SET: {{$basketball->set_id}}
      {{$basketball->genre}}
      {{$basketball->brand}}
      {{$basketball->year}}
      {{$basketball->type}}
@endforeach

Basketball count: {{$sets->where('genre','Basketball')->count()}}

  <div class="collection_stats">
    <table>
      <thead>
        <th>Genre</th>
        <th>Cards</th>
        <th>Comp. Sets</th>
      </thead>

      <tr>
        <td class="tablinks" id="Baseball" onmouseover="openCard(event, 'baseball')">Baseball Cards</td>
        <td class="tablinks" id="Baseball" onmouseover="openCard(event, 'baseball')">{{$cards->where('genre', 'Baseball')->count()}}</td>
        <td class="tablinks" id="Baseball" onmouseover="openCard(event, 'baseball')">{{$sets->where('genre','Baseball')->count()}}</td>
      </tr>
      <tr>
        <td class="tablinks" id="Basketball" onmouseover="openCard(event, 'basketball')">Basketball Cards</td>
        <td class="tablinks" id="Basketball" onmouseover="openCard(event, 'basketball')">{{$cards->where('genre', 'Basketball')->count()}}</td>
        <td class="tablinks" id="Basketball" onmouseover="openCard(event, 'basketball')">{{$sets->where('genre', 'Basketball')->count()}}</td>
      </tr>
      <tr>
        <td class="tablinks" id="Football" onmouseover="openCard(event, 'football')">Football Cards</td>
        <td class="tablinks" id="Football" onmouseover="openCard(event, 'football')">{{$cards->where('genre', 'Football')->count()}}</td>
        <td class="tablinks" id="Football" onmouseover="openCard(event, 'football')">{{$sets->where('genre', 'Football')->count()}}</td>
      </tr>
      <tr>
        <td class="tablinks" id="MiscSports" onmouseover="openCard(event, 'miscsports')">Misc. Sports Cards</td>
        <td class="tablinks" id="MiscSports" onmouseover="openCard(event, 'miscsports')">{{$cards->where('genre', 'Misc')->count()}}</td>
        <td class="tablinks" id="MiscSports" onmouseover="openCard(event, 'miscsports')">{{$sets->where('genre', 'Misc')->count()}}</td>
      </tr>
      <tr>
        <td class="tablinks" id="Nonsports" onmouseover="openCard(event, 'nonsports')">Non-Sports Cards</td>
        <td class="tablinks" id="Nonsports" onmouseover="openCard(event, 'nonsports')">{{$cards->where('genre', 'Non-Sports')->count()}}</td>
        <td class="tablinks" id="Nonsports" onmouseover="openCard(event, 'nonsports')">{{$sets->where('genre', 'Non-Sports')->count()}}</td>
      </tr>
      <tr>
        <td class="tablinks" id="Gaming" onmouseover="openCard(event, 'gaming')">Gaming Cards</td>
        <td class="tablinks" id="Gaming" onmouseover="openCard(event, 'gaming')">{{$cards->where('genre', 'Gaming')->count()}}</td>
        <td class="tablinks" id="Gaming" onmouseover="openCard(event, 'gaming')">{{$sets->where('genre', 'Gaming')->count()}}</td>
      </tr>
      <tr>
        <td>Total Collection</td>
        <td>{{$mycards->count()}}</td>
        <td>{{$sets->count()}}</td>
      </tr>
    </table>
  </div>

  <div class="showsets" id="baseball">
    <h5>Baseball Sets</h5>
    <hr />
      @foreach($sets->where('genre','Baseball') as $set)
      <a href = "{{route('showset', $set->id)}}">
    {{$set->year}} {{$set->brand}}</a>
    @endforeach

  </div>
  <div class="showsets" id="basketball">
    <h5>Basketball Sets</h5>
    @foreach($sets->where('genre','Basketball') as $set)
    {{$set->year}} {{$set->brand}}
    @endforeach
    <hr />

  </div>
  <div class="showsets" id="football">
    <h5>Football Sets</h5>
    <hr />
    @foreach($sets->where('genre','Basketball') as $set)
    {{$set->year}} {{$set->brand}}
    @endforeach

  </div>
  <div class="showsets" id="miscsports">
    <h5>Misc. Sports Sets</h5>
    <hr />
    @foreach($sets->where('genre','Misc') as $set)
    {{$set->year}} {{$set->brand}}
    @endforeach

  </div>
  <div class="showsets" id="nonsports">
    <h5>Non-Sports Sets</h5>
    <hr />
    @foreach($sets->where('genre','Non-Sports') as $set)
    {{$set->year}} {{$set->brand}}
    @endforeach

  </div>
  <div class="showsets" id="gaming">
    <h5>Gaming Sets</h5>
    <hr />
    @foreach($sets->where('genre','Gaming') as $set)
    {{$set->year}} {{$set->brand}}
    @endforeach

  </div>

  <div class="clearfix"></div>


<script>
function openCard(evt, id) {
  var i, showsets, tablinks;
  showsets = document.getElementsByClassName("showsets");
  for (i = 0; i < showsets.length; i++) {
    showsets[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(id).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>
<!--
  <div>
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif


  </div> -->


@endsection

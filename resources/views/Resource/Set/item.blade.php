@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="set_header">
  <h3>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->genre}}</h3><br />
  <span class="setCount">Count: {{$set->count}}</span>
</div>


<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
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
          <td class="tablinks" onmouseover="openCity(event, '{{$card->id}}')">
            {{$card->card_number}}
          </td>
          <td class="tablinks" onmouseover="openCity(event, '{{$card->id}}')">
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

<!-- <div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div> -->

<div class="clearfix"></div>




<script>
function openCity(evt, id) {
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

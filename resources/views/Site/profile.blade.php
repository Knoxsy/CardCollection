@extends('master/master')

@section('title', 'Profile Page')

@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div>
  <h5 class="greeting">Welcome to your collection, {{ Auth::user()->name }}!</h5>
</div>

<div class="profileLeft">
  <div>
    <div class="collection_stats">
      <table class="tableStyle">
        <thead>
          <th class="tableHeading">Genre</th>
          <th class="tableHeading">Cards</th>
          <th class="tableHeading">Comp. Sets</th>
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
          <td class="tableHeading">Total Collection</td>
          <td class="tableHeading">{{$mycards->count()}}</td>
          <td class="tableHeading">{{$sets->count()}}</td>
        </tr>
      </table>
    </div>
  </div>


  <div class="mdl-card__actions mdl-card--border">
    <div class="buttsProfile">
      <a href="browse">
        <button class="mdl-button mdl-js-button mdl-button--raised
        mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900
        butts2">
          Add Cards To Your Collection
        </button>
      </a>
    </div>
  </div>
</div>

<div class="profileRight">
<div class="showsets" id="baseball">
  <h5>Baseball Sets</h5>
  <hr />
  @php
  $set_name = array();
  foreach($sets->where('genre','Baseball') as $set){
    if(!in_array($set->year.$set->brand, $set_name)){
      $set_name[]= $set->year.$set->brand;
      echo '
        <div id="{{$set->set_id}}" class="{{$set->genre}}">
          <li>
            <a href="'.route('showset', $set->set_id).'">
              ' . $set->year .' ' . $set->brand . '
            </a>
          </li>
        </div>';
    }
  };
  @endphp
</div>

<div class="showsets" id="basketball">
  <h5>Basketball Sets</h5>
  <hr />
  @php
  $set_name = array();
  foreach($sets->where('genre','Basketball') as $set){
    if(!in_array($set->year.$set->brand, $set_name)){
      $set_name[]= $set->year.$set->brand;
      echo '
        <div id="{{$set->set_id}}" class="{{$set->genre}}">
          <li>
            <a href="'.route('showset', $set->set_id).'">
              ' . $set->year .' ' . $set->brand . '
            </a>
          </li>
        </div>';
    }
  };
  @endphp
</div>

<div class="showsets" id="football">
  <h5>Football Sets</h5>
  <hr />
  @php
  $set_name = array();
  foreach($sets->where('genre','Football') as $set){
    if(!in_array($set->year.$set->brand, $set_name)){
      $set_name[]= $set->year.$set->brand;
      echo '
        <div id="{{$set->set_id}}" class="{{$set->genre}}">
          <li>
            <a href="'.route('showset', $set->set_id).'">
              ' . $set->year .' ' . $set->brand . '
            </a>
          </li>
        </div>';
    }
  };
  @endphp
</div>

<div class="showsets" id="miscsports">
  <h5>Misc. Sports Sets</h5>
  <hr />
  @php
  $set_name = array();
  foreach($sets->where('genre','Misc') as $set){
    if(!in_array($set->year.$set->brand, $set_name)){
      $set_name[]= $set->year.$set->brand;
      echo '
        <div id="{{$set->set_id}}" class="{{$set->genre}}">
          <li>
            <a href="'.route('showset', $set->set_id).'">
              ' . $set->year .' ' . $set->brand . '
            </a>
          </li>
        </div>';
    }
  };
  @endphp
</div>

<div class="showsets" id="nonsports">
  <h5>Non-Sports Sets</h5>
  <hr />
  @php
  $set_name = array();
  foreach($sets->where('genre','Non-Sports') as $set){
    if(!in_array($set->year.$set->brand, $set_name)){
      $set_name[]= $set->year.$set->brand;
      echo '
        <div id="{{$set->set_id}}" class="{{$set->genre}}">
          <li>
            <a href="'.route('showset', $set->set_id).'">
              ' . $set->year .' ' . $set->brand . '
            </a>
          </li>
        </div>';
    }
  };
  @endphp
</div>

<div class="showsets" id="gaming">
  <h5>Gaming Sets</h5>
  <hr />
  @php
  $set_name = array();
  foreach($sets->where('genre','Gaming') as $set){
    if(!in_array($set->year.$set->brand, $set_name)){
      $set_name[]= $set->year.$set->brand;
      echo '
        <div id="{{$set->set_id}}" class="{{$set->genre}}">
          <li>
            <a href="'.route('showset', $set->set_id).'">
              ' . $set->year .' ' . $set->brand . '
            </a>
          </li>
        </div>';
    }
  };
  @endphp
</div>
</div>
>>>>>>> smf_cleanup

  <div class="showsets" id="gaming">
    <h5>Gaming Sets</h5>
    <hr />
    @foreach($sets->where('genre','Gaming') as $set)
    <div class="textPadding" id="{{$set->id}}" class="{{$set->genre}}">
      <li>
        <a href="{{route('showset', $set->set_id)}}">
          {{$set->year}} {{$set->brand}}
        </a>
      </li>
    </div>
    @endforeach
  </div>
  </div>
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

@endsection

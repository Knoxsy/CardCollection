@extends('master/master')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

  <div>
    <h5>{{ Auth::user()->name }}, welcome to your collection!</h5>
  </div>

  <div class="collection_stats">
    <table>
      <thead>
        <th>Genre</th>
        <th>Cards</th>
        <th>Comp. Sets</th>
      </thead>
      <tr>
        <td class="tablinks" onmouseover="openCard(event, 'baseball')">Baseball Cards</td>
        <td class="tablinks" onmouseover="openCard(event, 'baseball')"></td>
        <td class="tablinks" onmouseover="openCard(event, 'baseball')"></td>
      </tr>
      <tr>
        <td class="tablinks" onmouseover="openCard(event, 'basketball')">Basketball Cards</td>
        <td class="tablinks" onmouseover="openCard(event, 'basketball')"></td>
        <td class="tablinks" onmouseover="openCard(event, 'basketball')"></td>
      </tr>
      <tr>
        <td class="tablinks" onmouseover="openCard(event, 'football')">Football Cards</td>
        <td class="tablinks" onmouseover="openCard(event, 'football')"></td>
        <td class="tablinks" onmouseover="openCard(event, 'football')"></td>
      </tr>
      <tr>
        <td class="tablinks" onmouseover="openCard(event, 'miscsports')">Misc. Sports Cards</td>
        <td class="tablinks" onmouseover="openCard(event, 'miscsports')"></td>
        <td class="tablinks" onmouseover="openCard(event, 'miscsports')"></td>
      </tr>
      <tr>
        <td class="tablinks" onmouseover="openCard(event, 'nonsports')">Non-Sports Cards</td>
        <td class="tablinks" onmouseover="openCard(event, 'nonsports')"></td>
        <td class="tablinks" onmouseover="openCard(event, 'nonsports')"></td>
      </tr>
      <tr>
        <td class="tablinks" onmouseover="openCard(event, 'gaming')">Gaming Cards</td>
        <td class="tablinks" onmouseover="openCard(event, 'gaming')"></td>
        <td class="tablinks" onmouseover="openCard(event, 'gaming')"></td>
      </tr>
      <tr>
        <td>Total Collection</td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>

  <div class="showsets" id="baseball">
    <h5>Baseball Sets</h5>
    <hr />
    Hover over the Genre and get the lists of sets to show in this div
  </div>
  <div class="showsets" id="basketball">
    <h5>Basketball Sets</h5>
    <hr />
    Hover over the Genre and get the lists of sets to show in this div
  </div>
  <div class="showsets" id="football">
    <h5>Football Sets</h5>
    <hr />
    Hover over the Genre and get the lists of sets to show in this div
  </div>
  <div class="showsets" id="miscsports">
    <h5>Misc. Sports Sets</h5>
    <hr />
    Hover over the Genre and get the lists of sets to show in this div
  </div>
  <div class="showsets" id="nonsports">
    <h5>Non-Sports Sets</h5>
    <hr />
    Hover over the Genre and get the lists of sets to show in this div
  </div>
  <div class="showsets" id="gaming">
    <h5>Gaming Sets</h5>
    <hr />
    Hover over the Genre and get the lists of sets to show in this div
  </div>

  <div class="clearfix"></div>

<script>
//HOVER - SHOW CARD FUNCTION
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



{{$mycards}}

@endsection

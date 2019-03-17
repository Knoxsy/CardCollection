@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="set_header">
  <h3>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->genre}}</h3><br />
  <span class="setCount">Count: {{$set->count}}</span>
</div>

<body>

  <div class="checklist">
    <table width="550px" align="center">
      <thead>
        <th width="50px">Have<br />
          <input type="checkbox" id="select_all"/>
        </th>
        <th width="150px">Card #</th>
        <th width="350px">Name</th>
      </thead>
      <tbody>
        @foreach($cards as $card)
        <tr>
          <td class="tablinks" onmouseover="openCard(event, '{{$card->id}}')">
            <input class="checkbox" type="checkbox" id="check[]"/>
          </td>
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
  //Hover - Show Card Function
  function openCard(evt, id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(id).style.display = "block";
    evt.currentTarget.className += " active";
  }

  //Select all checkboxes function
  var select_all = document.getElementById("select_all"); //select all checkbox
  var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

  select_all.addEventListener("change", function(e){
	  for (i = 0; i < checkboxes.length; i++) {
		  checkboxes[i].checked = select_all.checked;
	  }
  });

  for (var i = 0; i < checkboxes.length; i++) {
	  checkboxes[i].addEventListener('change', function(e){ //".checkbox" change
		  //uncheck "select all", if one of the listed checkbox item is unchecked
		  if(this.checked == false){
			  select_all.checked = false;
		  }
		  //check "select all" if all checkbox items are checked
		  if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
			  select_all.checked = true;
		   }
	  });
  }
</script>

@endsection

@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')

<div class="set_header">
  <h3>{{$set->year}}&nbsp{{$set->brand}}&nbsp{{$set->type}}</h3><br />
  <span class="setCount">Count: {{$set->count}}</span>
</div>

<div class="checklist">
  <table>
    <thead>
      @auth
      <th width="50px">Have<br />
        <input type="checkbox" id="select_all"/>
      </th>
      @else

      @endauth
      <th width="150px">Card #</th>
      <th width="350px">Name</th>
    </thead>

    @auth
      <tbody>
        @php
          foreach($cards as $card){
            foreach($mycards as $mycard){
              $matched = false;
              if($mycard->card_id == $card->id){
                echo "<tr>
                  <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                    <input type='checkbox' class='check checkbox' id='select_all' checked/>
                  </td>
                  <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                    $card->card_number$card->card_number_append
                  </td>
                  <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                    $card->name
                  </td>
                </tr>";
                $matched = true;
                break;
              }
            }
            if (!$matched) {
              echo "<tr>
                <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                  <input type='checkbox' class='check checkbox' id='select_all' />
                </td>
                <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                  $card->card_number$card->card_number_append
                </td>
                <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                  $card->name
                </td>
              </tr>";
            }
          }
        @endphp
      </tbody>
    @else
      <tbody>
        @php
          foreach($cards as $card){
            echo "<tr>
              <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                $card->card_number$card->card_number_append
              </td>
              <td class='tablinks' onmouseover='openCard(event, ".$card->id.")'>
                $card->name
              </td>
            </tr>";
          }
        @endphp
      </tbody>
    @endauth
  </table>
</div>

@foreach ($cards as $card)
<div id="{{$card->id}}" class="tabcontent">
  <div class="card_container">
    <img src="{{ asset('images/sets/'.$set->year.' '.$set->brand.' '.$set->type.'/'.$card->card_number.''.$card->card_number_append.'.jpg') }}" height="350" width="250" />
  </div>
  <h5>#{{$card->card_number}}{{$card->card_number_append}}&nbsp{{$card->name}}</h5>
</div>
@endforeach
<div class="clearfix"></div>

<script>

//HOVER - SHOW CARD FUNCTION
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

// SELECT ALL CHECKBOXES FUNCTION
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

// ROW CHANGE ON CHECKBOX CLICK FUNCTION
$(document).ready(function() {
  $('tr').click(function() {
    var inp = $(this).find('.check');
    var tr = $(this).closest('tr');
    inp.prop('checked', !inp.is(':checked'))
    tr.toggleClass('isChecked', inp.is(':checked'));
  });
  // do nothing when clicking on checkbox, but bubble up to tr
  $('.check').click(function(e) {
    e.preventDefault();
  });
});

</script>

@endsection

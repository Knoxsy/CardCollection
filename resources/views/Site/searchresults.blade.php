@extends('master/master')
@section('content')

<pre>{{$result}}</pre>
<div class="backgroundForCard">

  <div id="newone1" class="tabcontent">
    <div class="card_container">
      <img src="{{$result->front_image}}" class="theCard" height="350" width="250" />
      <h5>#{{$item->card_number}}&nbsp{{$result->name}}</h5>
    </div>
  </div>

</div>
@endsection

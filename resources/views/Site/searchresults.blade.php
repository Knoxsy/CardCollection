@extends('master/master')
@section('content')


<!-- <pre>{{$results}}</pre> -->
<!-- <div class="backgroundForCard"> -->

<div class="search_container">
  @if($results->count() > 0)
    @foreach ($results as $result)
    <div>
      <img src="{{ asset('images/sets/'.$result->set->year.' '.$result->set->brand.' '.$result->set->type.'/'.$result->card_number.''.$result->card_number_append.'.jpg') }}" height="350" width="250" />
      <h5>{{$result->name}}</h5>
    </div>
    @endforeach
  @else
    <div class="demo-card-square2 mdl-card mdl-shadow--2dp">
      <h6>NO RESULTS FOUND</h6>
    </div>
  @endif
  </div>
@endsection

@extends('master/master')

@section('title', 'Site Name - Browse Page')


{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')

<h1>BROWSE PAGE</h1>

<div>
@foreach($categories as $category)
  <button class="category_button" id="{{$category}}">{{$category}}</button>
@endforeach
</div>


<script>

//NOTE lines 25-31 need to hide the original call

// $('#year_list').hide();
//
// $('#year_list').children('div').each(function(){
//   $(this).slideUp();
// $(this).next().show();
// });
//
// $('#brand_list').children('div').each(function(){
//   $(this).hide();
// });

  $('.category_button').click(function(){
    var current_category = $(this).attr('id');


    //YEAR
    $('#year_list').show().children('div').each(function(){
      console.log($(this).attr('class'));


      if($(this).attr('class') == current_category){
        $(this).slideDown();
      }else{
        $(this).slideUp();
      }
    });

    //BRAND
    $('#brand_list').show().children('div').each(function(){
      console.log($(this).attr('class'));

      if($(this).attr('class') == current_category){
        $(this).hslideDown();
      }else{
        $(this).slideUp();
      }
    });
  })

</script>

<!-- BOOTSTRAP TABS -->

  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#starks-panel" class="mdl-tabs__tab is-active">YEAR</a>
      <a href="#lannisters-panel" class="mdl-tabs__tab">BRAND</a>

  </div>

  <div class="mdl-tabs__panel is-active" id="starks-panel">

    <div id="year_list" class="year" type="hidden" style="display:none">

      @foreach($sets as $set)
      <div id="{{$set->id}}" class="{{$set->genre}}">
        <h5><a href="{{route('set.index', $set->id)}}">{{$set->year}}</h5>
      </div>
      @endforeach
    </div>

  </div>
  <div class="mdl-tabs__panel" id="lannisters-panel">
    <div id="brand_list" class="brand" style="display:none">
      @foreach($sets as $set)
      <div id="{{$set->id}}" class="{{$set->genre}}">
        <h5><a href="{{route('set.index', $set->id)}}"> {{$set->brand}}</a></h5>
      </div>
      @endforeach
    </div>

  </div>

</div>
  <!--  <h2>Name</h2>
  <h2>Team</h2> -->
</div>
<!-- Running multiple functions on page gtting errors  -->

<!-- This Nav Bar will be removed eventually
@include('partials.collection_navbar') -->
@endsection

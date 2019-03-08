@extends('master/master')

@section('title', 'Site Name - Browse Page')

@section('content')

  <h3>BROWSE PAGE</h3>

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
          $(this).slideDown();
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
        @foreach($sets->sortBy('year')->unique('year')->values()->all() as $set)
          <div id="{{$set->id}}" class="{{$set->genre}}">
            <h6> {{$set->year}}</h6>
            <li>
              <a href="{{route('set.show', $set->id)}}">  {{$set->year}} {{$set->brand}}</a>
            </li>
          </div>
        @endforeach
      </div>
    </div>

    <div class="mdl-tabs__panel" id="lannisters-panel">
      <div id="brand_list" class="brand" style="display:none">
        @foreach($sets->sortBy('brand')->unique('brand')->values()->all() as $set)
          <div id="{{$set->id}}" class="{{$set->genre}}">
            <h6> {{$set->brand}}</h6>
            <li>
              <a href="{{route('set.show', $set->id)}}">{{$set->year}} {{$set->brand}}</a>
            </li>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection

@extends('master/master')

@section('title', 'Cardboard Gems - Browse Page')

@section('content')
  <h2>BROWSE VIEW PAGE</h2>

  <div>
  @foreach($categories as $category)
    <button class="category_button" id="{{$category}}">{{$category}}</button>
  @endforeach
  </div>

  <script>

    $('.category_button').click(function(){
      var current_category = $(this).attr('id');

      //YEAR
      $('#year_list').show().children('div').each(function(){
        var year_list = $(this).attr('year');
        var sortDirection = $(this).is('#year_list') ? -1 : 1;
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

  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
      <a href="#starks-panel" class="mdl-tabs__tab is-active">YEAR</a>
      <a href="#lannisters-panel" class="mdl-tabs__tab">BRAND</a>

    </div>

    <div class="mdl-tabs__panel is-active" id="starks-panel">
      <div id="year_list" class="year" type="hidden" style="display:none">
        @foreach($sets->sortBy('year') as $set)
          <div id="{{$set->id}}" class="{{$set->genre}}">
            <h5><a href="{{route('set.index', $set->id)}}">{{$set->year}}</h5>
          </div>
        @endforeach
      </div>
    </div>
    <div class="mdl-tabs__panel" id="lannisters-panel">
      <div id="brand_list" class="brand" style="display:none">
        @foreach($sets->sortBy('brand') as $set)
          <div id="{{$set->id}}" class="{{$set->genre}}">
            <h5><a href="{{route('set.index', $set->id)}}"> {{$set->brand}}</a></h5>
          </div>
        @endforeach
      </div>
    </div>
  </div>


  <!-- <ul>
  @foreach($items as $item)
    <a href="/CardCollection/public/set/{{$item->id}}">
      {{$item->year}}
      {{$item->brand}}
      {{$item->genre}}
    </a>
    <br />
  @endforeach
  </ul> -->
@endsection

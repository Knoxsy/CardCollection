@extends('master/master')

@section('title', 'Site Name - Browse Page')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}" />

<main class="mdl-layout__content">

  <h3>Browse Collections</h3>

  <div class="toTheLeft">
    <div class="mdl-grid">

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col grow">
          <a href="#Base" class="category_button noUnderline" id="Baseball">
            <div class="demo-card-image mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">Baseball Cards</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col grow">
          <a href="#Base" class="category_button noUnderline" id="Basketball">
            <div class="demo-card-image1 mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">Basketball Cards</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col grow">
          <a href="#Base" class="category_button noUnderline" id="Football">
            <div class="demo-card-image2 mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">Football Cards</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col grow">
          <a href="#Base" class="category_button noUnderline" id="Misc">
            <div class="demo-card-image3 mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">Misc. Sports</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col grow">
          <a href="#Base" class="category_button noUnderline" id="Gaming">
            <div class="demo-card-image4 mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">Gaming Cards</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col grow">
          <a href="#Base" class="category_button noUnderline" id="Non-Sports">
            <div class="demo-card-image5 mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand"></div>
              <div class="mdl-card__actions">
                <span class="demo-card-image__filename">Other Cards</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="toTheRight">
    <div class="dataBlock">
      <script>

      setTimeout(function(){
        $('#Baseball').trigger('click');
      }, 500);

      $('.category_button').click(function(){
        var current_category = $(this).attr('id');

        //YEAR
        // so, maybe, we can loop through the years, and then through the children
        $('#year_list').show().children('div').each(function(){
          console.group();
          // first, looping through each YEAR
          var year_heading = $(this);

          year_heading.show().children('div').each(function(){
            // then, looping through records within the year heading

            if($(this).attr('class') == current_category){
              $(this).slideDown();
            } else{
              $(this).slideUp();
            }
          });

          var relevant_children = year_heading.children(`.${current_category}:visible`)

          if(relevant_children.length == 0) {
            year_heading.hide();
          }else{
            year_heading.show();
          }
          console.groupEnd();
        });

        //BRAND
        $('#brand_list').show().children('div').each(function(){
          console.group();

          var brand_heading = $(this);

          brand_heading.show().children('div').each(function(){
          console.log($(this).attr('class'));

          if($(this).attr('class') == current_category){
            $(this).slideDown();
          }else{
            $(this).slideUp();
          }
        });

        var relevant_brandchildren = brand_heading.children(`.${current_category}:visible`)

        if(relevant_brandchildren.length == 0) {
          brand_heading.hide();
        }else{
          brand_heading.show();
        }
        console.groupEnd();

      });
    });

      </script>


      <!-- MDL TABS -->
        <div class="dataBlockPadding">
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect" id="main_area">
          <div class="mdl-tabs__tab-bar">
            <a href="#starks-panel" class="mdl-tabs__tab is-active dataBlockFont">YEAR</a>
            <a href="#lannisters-panel" class="mdl-tabs__tab dataBlockFont">BRAND</a>

          </div>

          <div class="mdl-tabs__panel is-active" id="starks-panel">
            <div id="year_list" class="year dataBlockFont" type="hidden"
            style="display:none">
              @foreach($years as $year)
                <div id="year_{{$year}}">
                  <h6 class="dataBlockFont">{{$year}}</h6>
                  @foreach($sets->where('year', $year) as $set)
                    <div id="{{$set->id}}" class="{{$set->genre}}">
                      <li>
                        <a href="{{route('showset', $set->id)}}">
                          {{$set->year}} {{$set->brand}} {{$set->type}}
                        </a>
                      </li>
                    </div>
                  @endforeach
                </div>
              @endforeach
            </div>
          </div>
          <div class="mdl-tabs__panel dataBlockFont" id="lannisters-panel">
            <div id="brand_list" class="brand dataBlockFont" type ="hidden"
            style="display:none">
              @foreach($brands as $brand)
              <div id="brand_{{$brand}}">
                <h6 class="dataBlockFont">{{$brand}}</h6>
                @foreach($sets->where('brand', $brand) as $set)
                  <div  id="{{$set->id}}" class="{{$set->genre}}">
                    <li>
                      <a href="{{route('showset', $set->id)}}">
                        {{$set->year}} {{$set->brand}} {{$set->type}}
                      </a>
                    </li>
                  </div>
                @endforeach
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection

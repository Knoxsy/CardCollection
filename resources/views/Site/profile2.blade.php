@extends('master/master')

@section('title', 'Site Name - Profile Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
  <h4>My Collections</h4>
  <div>
    <div>User Name</div>
    <div>Cards:</div>
  </div>

  <div>
    <div>My Collections</div>
    <div>Set Genre</div>
    <div>Sets:</div>
    <div>Cards:</div>
</div>

<div class="inTheCenter">
  <div class="mdl-grid">

    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col">
        <a href="#Base" class="category_button noUnderline" id="Baseball">
          <div class="demo-card-image mdl-card mdl-shadow--2dp">
            <!-- <div>
              <div  class="myCollectionBaseball" class="mdl-card__title mdl-card--expand">
                <h4>
                  Featured event:<br>
                  May 24, 2016<br>
                  7-11pm
                </h4>
              </div>
              <div> -->
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">

                  <div  class="mdl-card__title mdl-card--expand"></div>
                  <div class="mdl-card__actions">
                    <span class="demo-card-image__filename">Baseball Cards</span>
                  </div>
                </div>
              </a>
            </div>
          </div>

    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--4-col">
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
      <div class="mdl-cell mdl-cell--4-col">
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
      <div class="mdl-cell mdl-cell--4-col">
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
      <div class="mdl-cell mdl-cell--4-col">
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
      <div class="mdl-cell mdl-cell--4-col">
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

@endsection

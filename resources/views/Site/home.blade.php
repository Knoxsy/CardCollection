@extends('master/master')

@section('title', 'Cardboard Gems')

@section('content')

  <main class="mdl-layout__content">
    <div class="demo-card-square mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title mdl-card--expand"></div>
      <div class="mdl-card__supporting-text cardFont">
        Welcome to your digital card collection.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <div class="butts1">
          <a href="browse">
            <button class="mdl-button mdl-js-button mdl-button--raised
            mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900
            butts2">
              Browse Collections
            </button>
          </a>
        </div>
      </div>
    </div>
  </main>
  
@endsection

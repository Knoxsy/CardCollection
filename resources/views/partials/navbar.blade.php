<!DOCTYPE html>
<!-- <head> -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
<!-- </head> -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-color--blue-grey-900" class="head">
        <div class="mdl-layout__header-row mdl-color--blue-grey-900">
          <!-- Title -->
          <span class="mdl-layout-title">Card Collector</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>

          @guest

              <a href="{{ route('register') }}">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2">
                  {{ __('Register') }}
                </button>
              </a>
              <a href="{{ route('login') }}">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2">
                  {{ __('Login') }}
                </button>
              </a>

          @else
          <ul>
            <div>
              <p style="color: red; font-family: fantasy; font-size: 20px">{{ Auth::user()->name }}
                  <a href="{{ route('logout') }}"
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </button>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </p>
            </div>
          </ul>
          @endguest


          <!-- Navigation. We hide it in small screens. -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                    mdl-textfield--floating-label mdl-textfield--align-right">
          <label class="mdl-button mdl-js-button mdl-button--icon"
                 for="fixed-header-drawer-exp">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample"
                   id="fixed-header-drawer-exp">
          </div>
        </div>
        </div>
      </header>
      <div class="mdl-layout__drawer mdl-color--blue-grey-900">
        <span class="mdl-layout-title mdl-color-text--white">Title</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link mdl-color-text--white" href="/CardCollection/public/">Home</a>
           <a class="mdl-navigation__link mdl-color-text--white" href="/CardCollection/public/browse">Browse</a>
           <a class="mdl-navigation__link mdl-color-text--white" href="/CardCollection/public/set">Set View</a>
           <a class="mdl-navigation__link mdl-color-text--white" href="/CardCollection/public/card">Card View</a>
           <a class="mdl-navigation__link mdl-color-text--white" href="/CardCollection/public/contact">Contact</a>
           <!-- <a class="mdl-navigation__link mdl-color-text--white" href="/CardCollection/public/login">Login</a> -->
        </nav>
    </div>

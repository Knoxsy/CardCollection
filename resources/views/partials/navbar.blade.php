

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-color--blue-grey-900" class="head">
        <div class="mdl-layout__header-row mdl-color--blue-grey-900">
          <!-- Title -->
          <span class="mdl-layout-title headerFont mdl-color-text--amber-50">Cardboard Gems</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>

      @auth
      <ul>
        <div>
          <p class="logIn1">
          {{ Auth::user()->name }}
            <a href="{{ route('logout') }}">
              <button class="mdl-button mdl-js-button mdl-button--raised
              mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </button>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
            style="display: none;">
              @csrf
            </form>
          </p>
        </div>
      </ul>

      @else

      <a href="{{ route('register') }}">
        <button class="mdl-button mdl-js-button mdl-button--raised
        mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900
        butts2 font">
        {{ __('Register') }}
        </button>
      </a>
      <a href="{{ route('login') }}">
        <button class="mdl-button mdl-js-button mdl-button--raised
        mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900
        butts2 font">
        {{ __('Login') }}
        </button>
      </a>

      @endauth

      <!-- Navigation. We hide it in small screens. -->

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
      mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
        for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder mdl-color--amber-50">
          <form action="{{ route('search') }}">
            <input class="mdl-textfield__input" type="text" style="color:black" name="sample" id="fixed-header-drawer-exp" />
            <Input type="submit" />
          </form>
        </div>
      </div>
    </a>
    </div>
  </header>

  <div class="mdl-layout__drawer mdl-color--blue-grey-900 font">
    <span class="mdl-layout-title mdl-color-text--amber-50 font">Cardboard Gems</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link mdl-color-text--amber-50"
      href="/CardCollection/public/">Home</a>
      <a class="mdl-navigation__link mdl-color-text--amber-50"
      href="/CardCollection/public/browse">Browse</a>
      <a class="mdl-navigation__link mdl-color-text--amber-50"
      href="/CardCollection/public/contact">Contact</a>
      <a class="mdl-navigation__link mdl-color-text--amber-50"
      href="/CardCollection/public/profile">My Collection</a>
    </nav>
  </div>

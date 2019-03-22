@extends('master/master')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
  <div class="demo-card-square2 mdl-card mdl-shadow--2dp">
                <div class="LoginFont">{{ __('LOGIN') }}</div>
                <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <label for="email" class="SecondType">{{ __('E-Mail Address') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" size ="35" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span role="alert">
                                      <br>
                                      <br>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        <div>
                            <br>
                            <label for="password" class="SecondType">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" size ="35" required>

                                @if ($errors->has('password'))
                                    <span role="alert">
                                      <br>
                                      <br>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                <div>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <br>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                    </form>

                </div>
            </div>






@endsection

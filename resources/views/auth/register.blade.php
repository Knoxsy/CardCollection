@extends('master/master')

@section('content')
<div class="demo-card-square2 mdl-card mdl-shadow--2dp">
    <br>
        <br>

                <div class="LoginFont">{{ __('REGISTER') }}</div>
                <br>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <label for="name" class="SecondType">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" size ="35" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span role="alert">
                                      <br>
                                      <br>
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                        </div>

                        <div>
                            <label for="email" class="SecondType">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" size ="35" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span role="alert">
                                      <br>
                                      <br>
                                        <strong >{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                        </div>

                        <div class="form-group row">
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
                            <br>
                        </div>

                        <div>
                            <label for="password-confirm" class="SecondType">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" size ="35" required>
                            </div>
                        </div>

                        <div>
                            <div>
                                <br>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

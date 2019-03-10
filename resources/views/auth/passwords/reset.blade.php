@extends('master/master')

@section('content')
<div class="demo-card-square2 mdl-card mdl-shadow--2dp">
                <div class="LoginFont">{{ __('Reset Password') }}</div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                            <label for="email" class="newEmail">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <label for="password" class="SecondType">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <label for="password-confirm" class="SecondType">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="SecondType" name="password_confirmation" required>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised">
                                    {{ __('Reset Password') }}
                                </button>
                    </form>
            </div>
@endsection

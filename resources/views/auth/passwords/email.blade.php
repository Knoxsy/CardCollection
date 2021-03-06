@extends('master/master')

@section('content')
<div class="demo-card-square2 mdl-card mdl-shadow--2dp">
                <div class="LoginFont">{{ __('Reset Password') }}</div>
                    @if (session('status'))
                      <br>
                        <span>{{ session('status') }}</span>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <br>
                            <label for="email" class="SecondType">{{ __('E-Mail Address') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" size="35" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span role="alert">
                                      <br>
                                      <br>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <br>
                            <div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                    </form>
</div>
@endsection

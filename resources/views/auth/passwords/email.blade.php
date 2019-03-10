@extends('master/master')

@section('content')
<div class="demo-card-square2 mdl-card mdl-shadow--2dp">
                <div class="LoginFont">{{ __('Reset Password') }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="SecondType">{{ __('E-Mail Address') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                    </form>
</div>
@endsection

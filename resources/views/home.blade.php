@extends('master/master')

@section('content')
<div class="demo-card-square2 mdl-card mdl-shadow--2dp">

                <div class="LoginFont">Welcome!!!</div>

                <div>
                    @if (session('status'))
                        <div class="ThirdType">{{ session('status') }}</div>
                    @endif

                    You are logged in!
                </div>
        <br>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--light-green-900 butts2" onclick="

</div>
@endsection

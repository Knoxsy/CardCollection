@extends('master/master')

@section('content')

  <div>Welcome to your collection, {{ Auth::user()->name }}!!!</div>
  <div>
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif

    You are logged in!
  </div>



{{$mycards}}

@endsection

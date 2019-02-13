@extends('master')

@section('title', 'login')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h1>LOGIN PAGE</h1>
  <div>
    USERNAME:<input></input><br />
    PASSWORD:<input></input><br />
    <input type='submit'></input>
    <a href="/CardCollection/public/loggedin_collection">LOGGEDIN COLLECTION</a>
  </div>
@endsection

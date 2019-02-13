@extends('master')

@section('title', 'register')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h1>REGISTER PAGE</h1>
  <div>
    USERNAME:<input></input><br />
    E-MAIL:<input></input><br />
    PASSWORD:<input></input><br />
    CONFIRM:<input></input><br />
    <input type='submit'></input>
  </div>
@endsection

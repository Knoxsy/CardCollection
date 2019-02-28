@extends('master/master')

@section('title', 'Site_Name - Login Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>LOGIN PAGE</h2>
  <div>
    <!-- <form action="" method=""> -->
    {!! Form::open(['method'=>'POST', 'action'=>'SiteController@login']) !!}
      <div>
        USERNAME:<input name="username" type="text" placeholder="ENTER USERNAME"></input>
        <br />
        PASSWORD:<input name="username" type="text" placeholder="PASSWORD"></input>
        <br />
        <label><input type="checkbox">REMEMBER ME</label>
        <br />
        <input type='submit'></input>
        <a href="profile">Profile Page</a>
      </div>
      {!! Form::close() !!}
    <!-- </form> -->
@endsection

@extends('master/master')

@section('title', 'Site_Name - Login Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h2>LOGIN PAGE</h2>
  <div>
    <form action="" method="">
      <div>
        USERNAME:<input name="username" type="text" placeholder="ENTER USERNAME"></input>
        <br />
        PASSWORD:<input name="username" type="text" placeholder="PASSWORD"></input>
        <br />
        <label><input type="checkbox">REMEMBER ME</label>
        <br />
        <input type='submit'></input>
        <a href="/CardCollection/public/loggedin_collection">LOGGEDIN COLLECTION</a>
      </div>
    </form>
@endsection

@extends('master/master')

@section('title', 'Site Name - Register Page')

{{--
  here we define a section that corresponds with the yield
  present in the master template.
   --}}
@section('content')
  <h3>REGISTER PAGE</h3>
  <div>
    <p>Please fill out this form to register for this website.
    <form action="" method="post">
      <input name="username" type="text" placeholder="USERNAME"></input>
      <br />
      <input name="email" type="text" placeholder="E-MAIL"></input>
      <br />
      <input name="email_confirm" type="text" placeholder="CONFIRM E-MAIL"></input>
      <br />
      <input name="password" type="text" placeholder="PASSWORD"></input>
      <br />
      <input name="password_confirm" type="text" placeholder="CONFIRM PASSWORD"></input>
      <br />
      <input type='submit'></input>
    </form>
    <a href="profile">Profile Page</a>
  </div>
@endsection

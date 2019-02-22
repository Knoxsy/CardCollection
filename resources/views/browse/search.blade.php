@extends('master/master')

@section('title', 'Site Name - Search Page')

@section('content')
  <h2>SEARCH PAGE</h2>
  <div>
    <form action="" method="">
      <select name="card_genre">
        <option value="baseball">Baseball</option>
        <option value="basketball">Basketball</option>
        <option value="football">Football</option>
        <option value="gaming">Gaming</option>
        <option value="hockey">Hockey</option>
        <option value="miscsports">Misc. Sports</option>
        <option value="nonsports">Non-Sports</option>
      </select>
      <input type="text" placeholder=""></input>
      <button>SEARCH</button>
    </form>
  </div>
@endsection

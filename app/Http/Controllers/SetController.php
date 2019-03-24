<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Set;
use App\MyCard;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class SetController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // return Set::with('cards')->get();
    $data['items'] = Set::with('cards')->get();
    return view('site.browse', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return View::make('set.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $rules = array(
      'genre'  => 'required',
      'year' => 'required',
      'brand' => 'required',
      'count' => 'required',
    );

        // store
    $set = new Set;
    $set->genre = $request->input('genre');
    $set->year  = $request->input('year');
    $set->brand = $request->input('brand');
    $set->count = $request->input('count');
    $set->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Set  $set
   * @return \Illuminate\Http\Response
   */
  public function show(Set $set)
  {
    if (Auth::check()){
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      $data['user'] = $user;
      $data['set'] = $set; //This shows only the set info
      $data['cards'] = $set->cards()->orderBy('card_number')->get(); //Shows cards in the sets
    } else {
      $data['set'] = $set; //This shows only the set info
      $data['cards'] = $set->cards()->orderBy('card_number')->get();
    }
    return view('resource.set.item', $data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Set  $set
   * @return \Illuminate\Http\Response
   */
  public function edit(Set $set)
  {
    $set = Set::find($set);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Set  $set
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Set $set)
  {
    $rules = array(
      'genre' => 'required',
      'year' => 'required|numeric',
      'brand' => 'required'
    );

    $set->genre = $request->input('genre');
    $set->year = $request->input('year');
    $set->brand = $request->input('brand');
    $set->count = $request->input('count');
    $set->save();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Set  $set
   * @return \Illuminate\Http\Response
   */
  public function destroy(Set $set)
  {
    $set->delete();
  }
}

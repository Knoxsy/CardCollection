<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['items'] = Card::orderBy('card_number', 'asc')->get();
    return view('resource.card.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        //
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
      'name'  => 'required',
      'card_number' => 'required',
      'set_id' => 'required',
    );

    //  TODO  NEED TO WORK ON VALIDATION

    //    $validator = Validator::make(Input::all(), $rules);
    //
    //     //process the login
    //     if($validator->fails()) {
    //       return Redirect::to('cards/create')
    //         ->withErrors($validator)
    //         ->withInput(Input::except('password'));
    // } else {
        // store
    $card = new Card;
    $card->name = $request->input('name');
    $card->card_number = $request->input('card_number');
    $card->front_image = $request->input('front_image');
    $card->back_image = $request->input('back_image');
    $card->set_id = $request->input('set_id');
    $card->save();

    return $card;

        // redirect
            // Session::flash('message', 'Successfully created card!');
            // return Redirect::to('card');
      //}
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Card  $card
   * @return \Illuminate\Http\Response
   */
  public function show(Card $card)
  {
    $card = Card::find($card);
    return View::make('card.show')->with('card', $card);
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
  public function edit(Card $card)
  {
    $card = Card::find($id);
    // show the edit form and pass the card
    return View::make('card.update')->with('card', $card);
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request, Card $card)
  {
    $rules = array(
      'name'  => 'required',
      'card_number' => 'required',
    );
  //     $validator = Validator::make(Input::all(), $rules);
  //
  //     //process the login
  //     if($validator->fails()) {
  //       return Redirect::to('cards/' . $id . '/edit')
  //         ->withErrors($validator)
  //         ->withInput(Input::except('password'));
  // } else {
      // store

    $card->name = $request->input('name');
    $card->card_number = $request->input('card_number');
    $card->front_image = $request->input('front_image');
    $card->back_image = $request->input('back_image');
    $card->set_id = $request->input('set_id');
    $card->save();

    return $card;

      // // redirect
      //     Session::flash('message', 'Successfully updated card!');
      //     return Redirect::to('cards');
      // }
  }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
   //  public function destroy(Card $card)
   //  {
   //    // delete
   //    $card->delete();
   //
   //    return 'Card deleted';
   //    // redirect
   //  //   Session::flash('message', 'Successfully deleted the card!');
   //  //   return Redirect::to('cards');
   // }
}

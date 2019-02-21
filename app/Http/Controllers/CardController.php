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
      $data['card'] = Card::orderBy('card_number', 'asc')
        ->get();
      return view('browse', $data);
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
        //
        $rules = array(
          'name'  => 'required',
          'card_number' => 'required',
          'front_image' => 'required',
          'back_image' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if($validator->fails()) {
          return Redirect::to('cards/create')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
    } else {
        // store
        $card = new Card;
        $card->name = Input::get('name');
        $card->card_number = Input::get('card_number');
        $card->front_image = Input::get('front_image');
        $card->back_image = Input::get('back_image');
        $card->save();

        // redirect
            Session::flash('message', 'Successfully created card!');
            return Redirect::to('card');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\MyCard;
use Illuminate\Http\Request;

class MyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['mycard'] = MyCard::orderBy('card_id', 'asc')
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
        'user_id'  => 'required',
        'card_id' => 'required',
        'condition' => 'required',
      );
      $validator = Validator::make(Input::all(), $rules);

      //process the login
      if($validator->fails()) {
        return Redirect::to('mycards/create')
          ->withErrors($validator)
          ->withInput(Input::except('password'));
  } else {
      // store
      $mycard = new MyCard;
      $mycard->user_id = $request->input('user_id');
      $mycard->card_id = $request->input('card_id');
      $mycard->condition = $request->input('condition');
      $mycard->save();

      // redirect
          Session::flash('message', 'Successfully created mycard!');
          return Redirect::to('mycard');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyCard  $myCard
     * @return \Illuminate\Http\Response
     */
    public function show(MyCard $myCard)
    {
      $mycard = MyCard::find($mycard);
      return View::make('mycard.show')
         ->with('mycard', $mycard);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyCard  $myCard
     * @return \Illuminate\Http\Response
     */
    public function edit(MyCard $myCard)
    {
      $mycard = MyCard::find($id);

      // show the edit form and pass the mycard
     return View::make('mycards.edit')
         ->with('mycard', $mycard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyCard  $myCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyCard $myCard)
    {
      $rules = array(
        'user_id'  => 'required',
        'card_id' => 'required',
        'condition' => 'required',
      );
      $validator = Validator::make(Input::all(), $rules);

      //process the login
      if($validator->fails()) {
        return Redirect::to('mycards/' . $id . '/edit')
          ->withErrors($validator)
          ->withInput(Input::except('password'));
  } else {
      // store
      $mycard = MyCard::find($id);
      $mycard->user_id = $request->input('user_id');
      $mycard->card_id = $request->input('card_id');
      $mycard->condition = $request->input('condition');
      $mycard->save();

      // redirect
          Session::flash('message', 'Successfully updated mycard!');
          return Redirect::to('mycards');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyCard  $myCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyCard $myCard)
    {
      // delete
      $mycard = MyCard::find($id);
      $mycard->delete();

      // redirect
      Session::flash('message', 'Successfully deleted the mycard!');
      return Redirect::to('mycards');
    }
}

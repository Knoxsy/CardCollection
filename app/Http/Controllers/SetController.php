<?php

namespace App\Http\Controllers;

use App\Set;
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
      $data['set'] = Set::orderBy('genre', 'asc')->get();
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
          'genre'  => 'required',
          'year' => 'required',
          'brand' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if($validator->fails()) {
          return Redirect::to('sets/create')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
    } else {
        // store
        $set = new Set;
        $set->genre       = Input::get('genre');
        $set->year      = Input::get('year');
        $set->brand = Input::get('brand');
        $set->count = Input::get('count');
        $set->save();

        // redirect
            Session::flash('message', 'Successfully created set!');
            return Redirect::to('set');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Set  $set
     * @return \Illuminate\Http\Response
     */
    public function show(Set $set)
    {
         $set = Set::find($set);
         return View::make('set.show')
            ->with('set', $set);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Set  $set
     * @return \Illuminate\Http\Response
     */
    public function edit(Set $set)
    {
        //
        $set = Set::find($set)
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
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Set  $set
     * @return \Illuminate\Http\Response
     */
    public function destroy(Set $set)
    {
        //
    }
}

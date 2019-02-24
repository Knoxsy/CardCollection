<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['items'] = Tag::all();
        return view('resource.tag.index', $data);
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
            'name'       => 'required',
        );
        // $validator = Validator::make(Input::all(), $rules);
        //
        // // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('nerds/create')
        //         ->withErrors($validator)
        //         ->withInput(Input::except('password'));
        // } else {
            // store
            $tag = new Tag;
            $tag->name       = $request->input('name');
            $tag->save();

            // redirect
            // Session::flash('message', 'Successfully created tag!');
            // return Redirect::to('tag');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
        $data['item'] = $tag;
        return view('tag.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //

        $data['item'] = $tag;
        return view('tag.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
        $rules = array(
            'name'       => 'required',
        );
        // $validator = Validator::make(Input::all(), $rules);
        //
        // // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('tag/' . $id . '/edit')
        //         ->withErrors($validator)
        //         ->withInput(Input::except('password'));
        // } else {
            // store
            $tag->name = $request->input('name');
            $tag->save();

            // redirect
          // Session::flash('message', 'Successfully updated tag!');
          // return Redirect::to('tag');
      // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
      // delete
      $tag->delete();

      // redirect
      // Session::flash('message', 'Successfully deleted the tag!');
      // return Redirect::to('tag');
    }
}

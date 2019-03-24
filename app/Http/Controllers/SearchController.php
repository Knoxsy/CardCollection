<?php

namespace App\Http\Controllers;
use App\Card;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
  public function filter(Request $request, Card $card)
  {
    // Search for a card based on their name.

      return $card->where('name', $request->input('name'))->get();



  // Continue for all of the filters.

  // No filters have been provided, so
  // let's return all users. This is
  // bad - we should paginate in
  // reality.
  return redirect('/search');
  }

  public function results(){
    return view('site.searchresults');
  }

}

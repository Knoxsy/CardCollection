<?php

namespace App\Http\Controllers;
use App\Card;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class SearchController extends Controller
{
  public function filter(Request $request)
  {
    // Search for a card based on their name.
    $data['results'] = Card::with('set')->where('name', 'LIKE', '%' . $request->input('sample') . '%')->get();

  // Continue for all of the filters.

  // No filters have been provided, so
  // let's return all users. This is
  // bad - we should paginate in
  // reality.

    return view('site.searchresults', $data);
  }
}

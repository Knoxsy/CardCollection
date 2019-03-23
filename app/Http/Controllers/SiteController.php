<?php
namespace App\Http\Controllers;
use App\Set;
use App\MyCard;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function home() {
    return view('site.home');
  }
  public function register() {
    return view('site.register');
  }
  public function login() {
    return view('site.login');
  }
  public function search() {
    return view('site.search');
  }
  public function browse() {
    $data['sets'] = Set::all();
    $data['categories'] = [];
    $data['years'] = [];
    $data['brands'] = [];
    foreach($data['sets'] as $set){
      if(!in_array($set->genre, $data['categories'])){
        array_push($data['categories'], $set->genre);
      }
      if(!in_array($set->year, $data['years'])){
        array_push($data['years'], $set->year);
      }
      if(!in_array($set->brand, $data['brands'])){
        array_push($data['brands'], $set->brand);
      }
    }
    sort($data['years']);
    sort($data['brands']);
    return view('site.browse', $data);
  }
  public function contact() {
    return view('site.contact');
  }

  public function profile() {
    if (Auth::check()){
      $user = Auth::user();
      $data['mycards'] = $user->mycards;

      // QUERY FOR RETRIEVING USER CARDS!
      //SELECT * FROM cards INNER JOIN my_cards ON cards.id = my_cards.card_id WHERE my_cards.user_id = 1;
      $data['cards'] = DB::table('cards')->join('my_cards', 'cards.id', '=', 'my_cards.card_id')->join('sets', 'cards.set_id', '=', 'sets.id')->where('my_cards.user_id','=',$user->id)->get();

      // QUERY FOR RETRIEVING USER SETS
      // SELECT * FROM sets INNER JOIN cards ON sets.id = cards.set_id INNER JOIN my_cards ON my_cards.card_id = cards.id WHERE my_cards.user_id = 1;
      $data['sets'] = DB::table('sets')->join('cards', 'sets.id', '=', 'cards.set_id')->join('my_cards', 'my_cards.card_id', '=', 'cards.id')->where('my_cards.user_id', '=', $user->id)->get();


      // $data['categories'] = [];
      // $data['years'] = [];
      // $data['brands'] = [];
      //
      // foreach($data['sets'] as $set){
      //   if(!in_array($set->genre, $data['categories'])){
      //     array_push($data['categories'], $set->genre);
      //   }
      //   if(!in_array($set->year, $data['years'])){
      //     array_push($data['years'], $set->year);
      //   }
      //   if(!in_array($set->brand, $data['brands'])){
      //     array_push($data['brands'], $set->brand);
      //    }
      // }
      // sort($data['years']);
      // sort($data['brands']);




      // $data['sets'] = array();
      // foreach ($data['cards'] as $card){
        // $set = $card->set();
        // if(!in_array($card, $data['cards'])){
          // array_push($data['sets'], $mycard->card_id);
        // }
      //}
      return view('profile', $data);
    } else {
      return redirect('login')->with( 'auth','You must be logged in to view collections.');
    }
  }
}

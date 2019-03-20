<?php
namespace App\Http\Controllers;
use App\Set;
use App\MyCard;
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
    $data['mycards'] = MyCard::with('user')->all();
    $data['cards'] = [];
    $data['sets'] = [];
    foreach($data['mycards'] as $mycard) {
      if(!in_array($mycard->card_id, $data['cards'])){
        array_push($data['cards'], $mycard->card_id);
      }
    foreach($data['sets'] as $set) {
      if(!in_array($mycard->set, $data['sets'])){
        array_push($data['sets'], $mycard->set);
      }
      sort($data['cards']);
      sort($data['sets']);

      }
    }
    return view('/profile', $data);
  }
}

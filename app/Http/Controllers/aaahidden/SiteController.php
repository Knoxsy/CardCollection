<?php

namespace App\Http\Controllers;

use App\Set;

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

    foreach($data['sets'] as $set){
      if(!in_array($set->genre, $data['categories'])){
        array_push($data['categories'], $set->genre);
      }
    }

    return view('site.browse', $data);
  }
  public function collection() {
    return view('collection/collection');
  }
  public function set() {
    return view('collection/set');
  }
  public function card() {
    return view('collection/card');
  }
  public function profile() {
    return view('profile/profile');
  }
}

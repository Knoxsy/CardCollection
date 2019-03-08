<?php

namespace App\Http\Controllers;

use App\Set;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function home() {
    return view('site.home');
  }
  public function login() {
    return view('site.login');
  }
  public function search() {
    return view('site.search');
  }
  public function contact() {
    return view('site.contact');
  }
  // public function browse() {
  //   return view('site.browse');
  // }
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
}

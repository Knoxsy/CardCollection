<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
      return view('home/home');
    }
    public function register() {
      return view('home/register');
    }
    public function login() {
      return view('home/login');
    }
    public function search() {
      return view('browse/search');
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

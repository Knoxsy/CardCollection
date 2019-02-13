<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
      return view('home');
    }
    public function register() {
      return view('register');
    }
    public function login() {
      return view('login');
    }
    public function loggedin_collection() {
      return view('loggedin_collection');
    }

}

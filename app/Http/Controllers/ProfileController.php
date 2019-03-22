<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MyCard;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     // * @return \Illuminate\Contracts\Support\Renderable
     */
//   public function index()
//     {
//       // return Set::with('cards')->get();
//       $data['mycards'] = MyCard::with('user_id')->get();
//     //   return view('site.browse', $data);
//     // }
//     // {
//         $user_id = auth()->user()->id;
//         $user = User::find($user_id);
//         return view('/profile')->with('mycards', $user->mycards);
//     }
//
 }

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Set extends Model
{
    public function cards(){
      return $this->hasMany('App\Card');
    }  //Set can have many Cards

    public function mycards(){
      /*
        Here, use the currently logged in user (Auth::user()), and retrieve
        all of the myCards they
      */
      return $this->hasManyThrough('App\MyCard', 'App\Card');
    }  //Set can have many MyCards

    public function users(){
      return $this->morphMany('App\User');
    }  //Set can have many Users

}

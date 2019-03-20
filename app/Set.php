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
      return $this->hasManyThrough('App\MyCard', 'App\Card');
    }  //Set can have many MyCards

    public function users(){
      return $this->belongsTo('App\User');
    }  //Set can have many Users

}

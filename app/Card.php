<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function set(){
      return $this->belongsTo('App\Set');
    }   //Card belongs to One Set

    public function myCards(){
      return $this->hasMany('App\MyCard');
    }  //Card can have many MyCards

    public function cardtags(){
      return $this->morphMany('App\CardTag', 'cardtaggable');
    }  //Card can have many tags

    public function users(){
      return $this->morphMany('App\User');
    }  //Card can have many Users
}


    //belongsTo
    //hasOne
    //hasMany

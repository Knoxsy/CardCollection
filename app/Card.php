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

    //belongsTo
    //hasOne
    //hasMany

    public function tags(){
      return $this->morphMany('App\Tag', 'taggable');
    }  //Card can have many tags
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCard extends Model
{
    public function set(){
      return $this->belongsTo('App\Set');
    }   //MyCard belongs to One Set

    public function card(){
      return $this->belongsTo('App\Card');
    }   //MyCard belongs to only one Card

    public function user(){
      return $this->belongsTo('App\User');
    }   //MyCard belongs to only one User

    public function tags(){
      return $this->morphMany('App\Tag', 'taggable');
    }   //MyCard can have many tags

}

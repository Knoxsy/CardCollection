<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCard extends Model
{

   protected $fillable = ['user_id', 'card_id', 'condition'];

    public function card(){
      return $this->belongsTo('App\Card');
    }   //MyCard belongs to only one Card

    public function user(){
      return $this->belongsTo('App\User');
    }   //MyCard belongs to only one User

}

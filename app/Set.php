<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    public function cards(){
      $setCardNumber = $this->hasMany('App\Card')->select(array('card_number'));
      return $setCardNumber;
      $setName = $this->hasMany('App\Card')->select(array('name'));
      return $setName;
    }  //Set can have many Cards

    public function myCards(){
      return $this->hasManyThrough('App\MyCard', 'App\Card');
    }  //Set can have many MyCards

    public function users(){
      return $this->morphMany('App\User');
    }  //Set can have many Users



    //No relation to tag since tags only apply to Cards or MyCards

}
// \(^_^)/ <(YAAAAY!)

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Set extends Model
{
    public function cards(){

      return $this->hasMany('App\Card');
    }  //Set can have many Cards
    //$set->Set::find(1)

    public function myCards(){
      return $this->hasManyThrough('App\MyCard', 'App\Card');
    }  //Set can have many MyCards

    public function users(){
      return $this->morphMany('App\User');
    }  //Set can have many Users



    //No relation to tag since tags only apply to Cards or MyCards

}
// \(^_^)/ <(YAAAAY!)

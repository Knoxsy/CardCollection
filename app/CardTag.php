<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardTag extends Model
{
    public function cardtaggable(){
      return $this->morphTo();
    }

    public function taggable(){
      return $this->morphMany();
    }

}

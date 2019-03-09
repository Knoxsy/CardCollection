<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model

//get all of the models that own tags
{
    public function taggable(){
      return $this->morphTo();
    }

}

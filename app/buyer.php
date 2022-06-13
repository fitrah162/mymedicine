<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    public function transaction(){
        return $this->hasMany('App\transaction','buyer_id','id');
    }
}

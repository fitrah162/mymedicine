<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function buyer(){
        return $this ->belongsTo('App\buyer','buyer_id');
    }
    public function products(){
        return $this->belongsToMany('App\product','medicine_transaction','transaction_id','medicine_id')
        ->withPivot('quantity','price');
    }
}

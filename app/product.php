<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //bisa melihat produk berdasarkan kategori dengan kolom category
    public function kategori(){
        return $this ->belongsTo('App\category','category');
    }
    public $timestamps = false;
    public function transaction(){
        
        return $this->belongsToMany('App\transaction','medicine_transaction','medicine_id','transaction_id')
        ->withPivot('quantity','price');
    }
}

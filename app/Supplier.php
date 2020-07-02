<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function barang(){
        return $this->belongsToMany('App\Barang');
    }
}

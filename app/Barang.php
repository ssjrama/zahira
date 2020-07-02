<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function supplier(){
        return $this->hasOne('App\Supplier', 'id', 'id_supplier');
    }
}

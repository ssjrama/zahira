<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nama_supplier',
        'nama_toko',
        'alamat',
        'no_hp'
    ];

    public function barang(){
        return $this->belongsToMany('App\Barang');
    }
}

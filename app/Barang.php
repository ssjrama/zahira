<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama',
        'id_supplier',
        'harga_jual',
        'harga_beli',
        'stok',
        'deskripsi',
        'status',
        'image'
    ];

    public function supplier(){
        return $this->hasOne('App\Supplier', 'id', 'id_supplier');
    }
}

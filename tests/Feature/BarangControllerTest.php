<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Barang;


class BarangControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_store(){
        $barang = Barang::create([
            'nama' => 'Coba',
            'id_supplier' => 1,
            'harga_jual' => 2000,
            'harga_beli' => 1000,
            'stok' => 21,
            'deskripsi' => 'test test',
            'status' => 'test',
            'image' => 'image.jpg'
        ]);

        $this->assertDatabaseHas('barangs', [
            'nama' => 'Coba',
            'id_supplier' => 1,
            'harga_jual' => 2000,
            'harga_beli' => 1000,
            'stok' => 21,
            'deskripsi' => 'test test',
            'status' => 'test',
            'image' => 'image.jpg'
        ]);	
    }

    public function test_destroy(){
        $barang = Barang::destroy(4);
        $this->assertDatabaseMissing('barangs',[
            'id' => 4
        ]);
    }

    public function test_update(){
        $barang = Barang::create([
            'nama' => 'Coba',
            'id_supplier' => 1,
            'harga_jual' => 2000,
            'harga_beli' => 1000,
            'stok' => 21,
            'deskripsi' => 'test test',
            'status' => 'test',
            'image' => 'image.jpg'
        ]);

        $barang = Barang::find(1);
        $barang->nama = 'Cobi';
        $barang->id_supplier = 1;
        $barang->harga_jual = 2000;
        $barang->harga_beli = 1000;
        $barang->stok = 21;
        $barang->deskripsi = 'test test';
        $barang->status = 'test';
        $barang->save();

        $this->assertDatabaseHas('barangs', [
            'nama' => 'Cobi',
            'id_supplier' => 1,
            'harga_jual' => 2000,
            'harga_beli' => 1000,
            'stok' => 21,
            'deskripsi' => 'test test',
            'status' => 'test',
            'image' => 'image.jpg'
        ]);	
    }
}

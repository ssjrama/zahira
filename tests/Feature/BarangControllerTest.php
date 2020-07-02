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
            'harga' => 2000,
            'stok' => 21,
            'deskripsi' => 'test test',
            'image' => 'image.jpg'
        ]);

        $this->assertDatabaseHas('barangs', [
            'nama' => 'Coba',
            'harga' => 2000,
            'stok' => 21,
            'deskripsi' => 'test test',
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
            'harga' => 2000,
            'stok' => 21,
            'deskripsi' => 'test test',
            'image' => 'image.jpg'
        ]);

        $barang = Barang::find(1);
        $barang->nama = 'Coba 1';  
        $barang->harga = 4000;  
        $barang->stok = 40;  
        $barang->deskripsi = 'Testing';
        $barang->image = 'Test';
        $barang->save();

        $this->assertDatabaseHas('barangs', [
            'nama' => 'Coba 1',
            'harga' => 4000,
            'stok' => 40,
            'deskripsi' => 'Testing',
            'image' => 'Test'
        ]);	
    }
}

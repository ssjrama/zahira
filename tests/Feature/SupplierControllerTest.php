<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Supplier;

class SupplierControllerTest extends TestCase
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
        $supplier = Supplier::create([
            'nama_supplier' => 'azizah',
            'nama_toko' => 'zahira',
            'alamat' => 'indramayu',
            'no_hp' => '0888888'
        ]);

        $this->assertDatabaseHas('suppliers',[
            'nama_supplier' => 'azizah',
            'nama_toko' => 'zahira',
            'alamat' => 'indramayu',
            'no_hp' => '0888888'
        ]);
    }

    public function test_destroy(){
        $supplier = Supplier::destroy(4);
        $this->assertDatabaseMissing('suppliers',[
            'id' => 4
        ]);
    }

    public function test_update(){
        $supplier = Supplier::create([
            'nama_supplier' => 'azizah',
            'nama_toko' => 'zahira',
            'alamat' => 'indramayu',
            'no_hp' => '0888888'
        ]);

        $supplier = Supplier::find(1);
        $supplier->nama_supplier = 'wahyu';
        $supplier->nama_toko = 'toko wahyu';
        $supplier->alamat = 'indramayu';
        $supplier->no_hp = '09999';
        $supplier->save();

        $this->assertDatabaseHas('suppliers',[
            'nama_supplier' => 'wahyu',
            'nama_toko' => 'toko wahyu',
            'alamat' => 'indramayu',
            'no_hp' => '09999'
        ]);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Keuangan;

class KeuanganControllerTest extends TestCase
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
        $keuangan = new Keuangan();
        $keuangan->pemasukan = 20000;
        $keuangan->pengeluaran = 18000;
        $keuangan->keuntungan = $keuangan->pemasukan - $keuangan->pengeluaran;
        $keuangan->save();

        $this->assertDatabaseHas('keuangans',[
            'pemasukan' => 20000,
            'pengeluaran' => 18000,
            'keuntungan' => 2000
        ]);
    }

    public function test_destroy(){
        $keuangan = Keuangan::destroy(4);
        $this->assertDatabaseMissing('keuangans',[
            'id' => 4
        ]);
    }

    public function test_update(){
        $keuangan = new Keuangan();
        $keuangan->pemasukan = 20000;
        $keuangan->pengeluaran = 18000;
        $keuangan->keuntungan = $keuangan->pemasukan - $keuangan->pengeluaran;
        $keuangan->save();

        $keuangan = Keuangan::find(1);
        $keuangan->pemasukan = 30000;
        $keuangan->pengeluaran = 20000;
        $keuangan->keuntungan = $keuangan->pemasukan - $keuangan->pengeluaran;
        $keuangan->save();

        $this->assertDatabaseHas('keuangans',[
            'pemasukan' => 30000,
            'pengeluaran' => 20000,
            'keuntungan' => 10000
        ]);
    }
}

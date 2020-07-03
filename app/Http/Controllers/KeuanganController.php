<?php

namespace App\Http\Controllers;

use App\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = Keuangan::paginate(10);
        return view('admin.keuangan.index')->with('keuangan', $keuangan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keuangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pemasukan' => 'required',
            'pengeluaran' => 'required'
        ]);

        $keuangan = new Keuangan();
        $keuangan->pemasukan = $request->input('pemasukan');
        $keuangan->pengeluaran = $request->input('pengeluaran');
        $keuangan->keuntungan = $keuangan->pemasukan - $keuangan->pengeluaran;
        $keuangan->save();

        return redirect('/keuangan')->with('success', 'Data keuangan baru ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keuangan = Keuangan::findOrFail($id);
        return view('admin.keuangan.edit')->with('keuangan', $keuangan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'pemasukan' => 'required',
            'pengeluaran' => 'required'
        ]);

        $keuangan = Keuangan::findOrFail($id);
        $keuangan->pemasukan = $request->input('pemasukan');
        $keuangan->pengeluaran = $request->input('pengeluaran');
        $keuangan->keuntungan = $keuangan->pemasukan - $keuangan->pengeluaran;
        $keuangan->save();

        return redirect('/keuangan')->with('success', 'Data keuangan berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keuangan = Keuangan::findOrFail($id);
        $keuangan->delete();
        return redirect('/keuangan')->with('success', 'Data keuangan berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::paginate(10);
        return view('admin.supplier.index')->with('supplier', $supplier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
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
            'nama_supplier' => 'required',
            'nama_toko' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        $supplier = new Supplier();
        $supplier->nama_supplier = $request->input('nama_supplier');
        $supplier->nama_toko = $request->input('nama_toko');
        $supplier->alamat = $request->input('alamat');
        $supplier->no_hp = $request->input('no_hp');
        $supplier->save();

        return redirect('/supplier')->with('success', 'Data supplier baru ditambahkan');
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
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit')->with('supplier', $supplier);
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
            'nama_supplier' => 'required',
            'nama_toko' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->nama_supplier = $request->input('nama_supplier');
        $supplier->nama_toko = $request->input('nama_toko');
        $supplier->alamat = $request->input('alamat');
        $supplier->no_hp = $request->input('no_hp');
        $supplier->save();

        return redirect('/supplier')->with('success', 'Data supplier baru ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect('/supplier')->with('success', 'Data supplier berhasil dihapus');
    }
}

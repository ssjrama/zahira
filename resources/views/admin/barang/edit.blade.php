@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/barang/{{$barang->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$barang->nama}}">
            </div>

            <div class="form-group">
                <label for="id_supplier">Supplier</label>
                <select name="id_supplier">
                    @foreach ($supplier as $s)
                        <option value="{{$s->id}}">{{$s->nama_supplier}}</option>
                    @endforeach 
                </select>    
            </div>
            
            <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control" value="{{$barang->harga_jual}}">
            </div>

            <div class="form-group">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control" value="{{$barang->harga_beli}}">
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" class="form-control" value="{{$barang->stok}}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="form-control">{{$barang->deskripsi}}</textarea>
            </div>
            
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary"> 
        </form>
    </div>
</main>
@endsection
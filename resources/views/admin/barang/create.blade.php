@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/barang" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
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
                <input type="number" name="harga_jual" class="form-control">
            </div>

            <div class="form-group">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control">
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="form-control"></textarea>
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
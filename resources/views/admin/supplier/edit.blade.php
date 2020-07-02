@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/supplier/{{$supplier->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_supplier">Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control" value="{{$supplier->nama_supplier}}">
            </div>

            <div class="form-group">
                <label for="nama_toko">Nama Toko</label>
                <input type="text" name="nama_toko" class="form-control" value="{{$supplier->nama_toko}}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" rows="5" class="form-control">{{$supplier->alamat}}</textarea>
            </div>

            <div class="form-group">
                <label for="no_hp">No. HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{$supplier->no_hp}}"
            </div>
            <input type="submit" value="Submit" class="btn btn-primary"> 
        </form>
    </div>
</main>
@endsection
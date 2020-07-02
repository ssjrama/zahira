@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/supplier" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_supplier">Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama_toko">Nama Toko</label>
                <input type="text" name="nama_toko" class="form-control">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="no_hp">No. HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            
            <input type="submit" value="Submit" class="btn btn-primary"> 
        </form>
    </div>
</main>
@endsection
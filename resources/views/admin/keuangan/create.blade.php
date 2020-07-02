@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/keuangan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="pengeluaran">Pengeluaran</label>
                <input type="number" name="pengeluaran" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="pemasukan">Pemasukan</label>
                <input type="number" name="pemasukan" class="form-control">
            </div>

            <input type="submit" value="Submit" class="btn btn-primary"> 
        </form>
    </div>
</main>
@endsection
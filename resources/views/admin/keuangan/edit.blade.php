@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/keuangan/{{$keuangan->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="pengeluaran">Pengeluaran</label>
                <input type="number" name="pengeluaran" class="form-control" value="{{$keuangan->pengeluaran}}">
            </div>
            
            <div class="form-group">
                <label for="pemasukan">Pemasukan</label>
                <input type="number" name="pemasukan" class="form-control" value="{{$keuangan->pemasukan}}">
            </div>

            <input type="submit" value="Submit" class="btn btn-primary"> 
        </form>
    </div>
</main>
@endsection
@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
       <a href="/barang/create" class="btn btn-primary">Tambah Barang</a>
       @if (count($barang)>0)
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ($barang as $b)
                <tr>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->harga_jual}}</td>
                    <td>{{$b->harga_beli}}</td>
                    <td>{{$b->stok}}</td>
                    <td>{{$b->status}}</td>
                    <td><img class="img-fluid h-25" src="/storage/images/{{$b->image}}" alt="image"></td>
                    <td><a href="/barang/{{$b->id}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/barang/{{$b->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           </table>        
       @else
       @endif
    </div>
</main>
@endsection
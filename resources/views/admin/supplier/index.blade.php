@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
       <a href="/supplier/create" class="btn btn-primary">Tambah Supplier</a>
       @if (count($supplier)>0)
            <table class="table table-striped">
                <tr>
                    <th>Nama Supplier</th>
                    <th>Nama Toko</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ($supplier as $s)
                <tr>
                    <td>{{$s->nama_supplier}}</td>
                    <td>{{$s->nama_toko}}</td>
                    <td>{{$s->alamat}}</td>
                    <td>{{$s->no_hp}}</td>
                    
                    <td><a href="/supplier/{{$s->id}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/supplier/{{$s->id}}" method="post">
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